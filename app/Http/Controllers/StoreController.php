<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){
        $opens = [ 
            (object) ['jour'=> 'Sunday', 'hor'=> 'Close'],
            (object) ['jour'=> 'Monday', 'hor'=> '7:00 AM to 8:00 PM'],
            (object) ['jour'=> 'Tuesday', 'hor'=> '7:00 AM to 8:00 PM'],
            (object) ['jour'=> 'Wednesday', 'hor'=> '7:00 AM to 8:00 PM'],
            (object) ['jour'=> 'Thursday', 'hor'=> '7:00 AM to 8:00 PM'],
            (object) ['jour'=> 'Friday', 'hor'=> '7:00 AM to 8:00 PM'],
            (object) ['jour'=> 'Saturday', 'hor'=> '9:00 AM to 5:00 PM'],
        ];
        $address = (object) [
            'text1'=> '1116 Orchard Street',
            'text2'=> 'Golden Valley, Minnesota',
            'text3'=> 'Call Anytime',
            'num'=> '(317) 585-8468',
        ];
        $end = (object) [
            'titre'=> 'Strong Coffee, Strong Roots',
            'sousTitre'=> 'About Our Cafe',
            'texte1'=> 'Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.',
            'texte2'=> 'We guarantee that you will fall in
            <em>lust</em>
            with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.',
        ];
        return view('pages/store', compact('opens', 'address', 'end'));
    }
}
