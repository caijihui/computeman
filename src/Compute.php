<?php
namespace Computeman;

use Illuminate\Http\Request;
use Carbon\Carbon;

class Compute
{

    /**
     *  传参例： 1970-01-02，其他格式返回0
     * @param $birthDay
     * @return int
     */
    public function getAge($birthDay)
    {
        try {
            list($year, $month, $day) = explode('-', $birthDay);
            $birthday = Carbon::createFromDate($year, $month, $day);
            $age = Carbon::now()->diffInYears($birthday);
        }catch (\Exception $e){
            $age = 0;
        }
        return $age;
    }

}
