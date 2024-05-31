<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Home;
use App\Models\IbadahRayon;
use App\Models\IbadahYouth;
use App\Models\KaumBapa;
use App\Models\KaumWanita;
use App\Models\Offering;
use App\Models\PojokJemaat;
use App\Models\Schedule;
use App\Models\Service;
use Illuminate\Http\Request;

class GpdiController extends Controller
{
    public function index(){
        $home = Home::first();
        return view('frontend.content.home', [
            'home' => $home
        ]);
    }
    public function about(){
        $about = About::first();
        return view('frontend.content.about',[
            'about' => $about
        ]);
    }
    public function service(){
        $service = Service::first();
        return view('frontend.content.service',[
            'service' => $service
        ]);
    }
    public function offering(){
        $offering = Offering::first();
        return view('frontend.content.offering',[
            'offering' => $offering
        ]);
    }
    public function schedule(){
        $schedule = Schedule::first();
        return view('frontend.content.schedule',[
            'schedule' => $schedule
        ]);
    }
    public function media(){
        $media = PojokJemaat::first();
        return view('frontend.content.media',[
            'media' => $media
        ]);
    }
    public function kaumwanita(){
        $kaumwanita = KaumWanita::first();
        return view('frontend.content.kaumwanita',[
            'kaumwanita' => $kaumwanita
        ]);
    }
    public function kaumbapa(){
        $kaumbapa = KaumBapa::first();
        return view('frontend.content.kaumbapa',[
            'kaumbapa' => $kaumbapa
        ]);
    }
    public function ibadahrayon(){
        $ibadahrayon = IbadahRayon::first();
        return view('frontend.content.ibadahrayon',[
            'ibadahrayon' => $ibadahrayon
        ]);
    }
    public function ibadahyouth(){
        $ibadahyouth = IbadahYouth::first();
        return view('frontend.content.ibadahyouth',[
            'ibadahyouth' => $ibadahyouth
        ]);
    }
    public function ibadahrayaminggu(){
        return view('frontend.content.ibadahrayaminggu');
    }
    public function ibadahsekolahminggu(){
        return view('frontend.content.ibadahsekolahminggu');
    }

}
