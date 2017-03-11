<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class NewsHeadLine extends Model {

    protected $table = 'newsheadline';

    protected $fillable = ['NewsTitle', 'NewsReporterName', 'NewsReportingArea', 'NewsCategory', 'NewsSmallDescription', 'NewsDetailsUrl'];

}
