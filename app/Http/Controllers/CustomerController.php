<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class CustomerController extends Controller
{
    public function index(){
        $customer = Customer::all();
        return $customer;
    }
    public function show($id){
        $customer = Customer::find($id);
        return $customer;
    }
    public function jay($code_customer,$name,$email,$country,$city,$address,$contact_number){
            $customer = new Customer();
            $customer -> code_customer = $code_customer;
            $customer -> name = $name;
            $customer -> email = $email;
            $customer -> country = $country;
            $customer -> city = $city;
            $customer -> address = $address;
            $customer -> contact_number = $contact_number;
            $customer -> save();
            return $customer;
    }
    public function update($id,$a,$b,$c,$d,$e,$f,$g){
        $customer =  Customer::find($id);
        $customer -> code_customer = $a;
        $customer -> name = $b;
        $customer -> email = $c;
        $customer -> country = $d;
        $customer -> city = $e;
        $customer -> address = $f;
        $customer -> contact_number = $g;
        $customer -> save();
        return $customer;
    }
    public function hapus($id){
        $post = Customer::find($id);
        $post -> delete();
    }
    //
}
