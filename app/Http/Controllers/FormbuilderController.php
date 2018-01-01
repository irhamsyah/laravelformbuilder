<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tabeltemplate;
use DB;
use Auth;
use Validator;
use Hash;
use Image;
use Mail;

class FormbuilderController extends Controller
{
    //
    public function simpancode(Request $request)
    {
    	
		$this->validate($request, [ 
            'isi' => 'required',
        ]);
        $data = $request->only('isi', 'kepala','kaki');

        // Don't overcomplicate, just upload to public/img folder and log the file name
        // In the future, maybe we would do some processing like resize or crop it.

            $data['kepala'] = 'link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">';
            $data['kaki']='<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>';
        
        $datatempl = Tabeltemplate::create($data);
        //$product->categories()->sync($request->get('category_lists'));

        \Flash::success('Data Form Template saved.');
        return redirect()->route('lihattemplate');


    }

    public function lihattemplate()
    {
        $lihattemplate=Tabeltemplate::paginate(10);
        return view('lihatdaftartemplate',array('lihattemplate'=>$lihattemplate));
    }

    public function listtemplate($id)
    {
        $idlisttemplate = Tabeltemplate::findOrFail($id);
        return view('lihathasiltemplate',compact('idlisttemplate'));

    }
    public function hapuslisttemplate($id)
    {
        Tabeltemplate::find($id)->delete();
        \Flash::success(' Daftar Template Telah Dihapus');
        return redirect()->route('lihattemplate');

    }

    public function updateformtempl(Request $request)
    {
        $produk = Tabeltemplate::findOrFail($request->id);
        $this->validate($request,
            [   'isi'=>'required'
            ]);
        $data = $request->only('isi');

        $produk->update($data);
        \Flash::success('Form Template updated.');
        return redirect()->route('lihattemplate');
    }
}
