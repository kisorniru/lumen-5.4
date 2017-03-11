<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class NewsDetails extends Model {

    protected $table = 'newsdetails';

    protected $fillable = ['NewsHeadLineId','NewsDetails', 'NewsImagesUrl'];

}
