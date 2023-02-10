<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quizM extends Model
{
    use HasFactory;
protected $fillable= [
  'revenue',
  'loan',
  'gender',
  'race',
  'paymentM',
  'sector',
  'companyYears'

];
}
