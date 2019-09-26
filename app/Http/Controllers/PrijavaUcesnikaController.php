<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PrijavaUcesnikaController extends Controller
{
    public function countParticipants(){
        $br = Participant::all()->count();
//$ucesnici = Participant::all();
  $ucesnici = DB::table('participants')->paginate(10);
        return view('ukupno-ucesnika')->with('br', $br)->with('ucesnici', $ucesnici);
    }
    public function register()
    {

        $br = Participant::all()->count();

        $mesta = 150 + 2 - $br;
      //  dd($mesta);
        return view('register')->with('mesta', $mesta);
    }
/*    public function sanitize()
    {
        $input = $this->all();

        if (preg_match("#https?://#", $input['url']) === 0) {
            $input['url'] = 'http://'.$input['url'];
        }

        $input['name'] = filter_var($input['name'], FILTER_SANITIZE_STRING);
        $input['lastname'] = filter_var($input['lastname'], FILTER_SANITIZE_STRING);

        $this->replace($input);
    }*/
    public function submitRegistration(Request $request)
    {
        $value = $request->session()->all();
        //dd($value);
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'birth_year' => 'required',
            'organization' => 'required',
            'type_organization' => 'required',
            'position' => 'required',
            'drugi_tip_organizacije' => 'nullable',
        ]);

 // dd($request);
       try{
           $participant = new Participant();
           $participant->ime = $request->name;
           $participant->prezime =  $request->lastname;
           $participant->email =  filter_var($request->email, FILTER_SANITIZE_STRING);
           $participant->godina_rodjenja = $request->birth_year;
           $participant->organizacija =  $request->organization;
           $participant->tip_organizacije =  $request->type_organization;
           $participant->pozicija =  $request->position;


           if(!is_null($request->drugi_tip_organizacije)) {
               $participant->drugi_tip_organizacije =$request->drugi_tip_organizacije;
           }

      if(!is_null( $request->iskustvo))
      {
          $participant->iskustvo =  $request->iskustvo;

      }
        $participant->save();
        $msg="Registration is completed.";
           $data['title'] = "Registration is completed.";

           $data['body'] = "Registration for .".$request->name." ".$request->lastname." is received.";
           $sendMail = $request->email;
           $user = $request->name ." ".$request->lastname;
           $message = "Registration is completed for" . $request->name. " ".$request->lastname."." ;
           Mail::send('welcome-registration', $data, function($message) use($sendMail, $user){

               $message->to($sendMail, $user)


                   ->subject('Registration');
           });

          /* if (Mail::failures()) {
               return response()->Fail('Sorry! Please try again latter');
           }else{
               return response()->success('Great! Successfully send in your mail');
           }*/

       }catch(\Illuminate\Database\QueryException $ex)
       {
           $msg = "Please, try again and input only required values.";
       }

        $br = Participant::all()->count();

        $mesta = 150 + 2 - $br;
 return view('register')->with('msg', $msg)->with('mesta', $mesta);
    }
}
