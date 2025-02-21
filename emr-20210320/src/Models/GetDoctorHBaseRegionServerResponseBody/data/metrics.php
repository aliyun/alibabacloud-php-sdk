<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionServerResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionServerResponseBody\data\metrics\avgGc;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionServerResponseBody\data\metrics\cacheRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionServerResponseBody\data\metrics\dailyReadRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionServerResponseBody\data\metrics\dailyReadRequestDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionServerResponseBody\data\metrics\dailyWriteRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionServerResponseBody\data\metrics\dailyWriteRequestDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionServerResponseBody\data\metrics\regionCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionServerResponseBody\data\metrics\totalReadRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionServerResponseBody\data\metrics\totalRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionServerResponseBody\data\metrics\totalWriteRequest;

class metrics extends Model
{
    /**
     * @var avgGc
     */
    public $avgGc;
    /**
     * @var cacheRatio
     */
    public $cacheRatio;
    /**
     * @var dailyReadRequest
     */
    public $dailyReadRequest;
    /**
     * @var dailyReadRequestDayGrowthRatio
     */
    public $dailyReadRequestDayGrowthRatio;
    /**
     * @var dailyWriteRequest
     */
    public $dailyWriteRequest;
    /**
     * @var dailyWriteRequestDayGrowthRatio
     */
    public $dailyWriteRequestDayGrowthRatio;
    /**
     * @var regionCount
     */
    public $regionCount;
    /**
     * @var totalReadRequest
     */
    public $totalReadRequest;
    /**
     * @var totalRequest
     */
    public $totalRequest;
    /**
     * @var totalWriteRequest
     */
    public $totalWriteRequest;
    protected $_name = [
        'avgGc'                           => 'AvgGc',
        'cacheRatio'                      => 'CacheRatio',
        'dailyReadRequest'                => 'DailyReadRequest',
        'dailyReadRequestDayGrowthRatio'  => 'DailyReadRequestDayGrowthRatio',
        'dailyWriteRequest'               => 'DailyWriteRequest',
        'dailyWriteRequestDayGrowthRatio' => 'DailyWriteRequestDayGrowthRatio',
        'regionCount'                     => 'RegionCount',
        'totalReadRequest'                => 'TotalReadRequest',
        'totalRequest'                    => 'TotalRequest',
        'totalWriteRequest'               => 'TotalWriteRequest',
    ];

    public function validate()
    {
        if (null !== $this->avgGc) {
            $this->avgGc->validate();
        }
        if (null !== $this->cacheRatio) {
            $this->cacheRatio->validate();
        }
        if (null !== $this->dailyReadRequest) {
            $this->dailyReadRequest->validate();
        }
        if (null !== $this->dailyReadRequestDayGrowthRatio) {
            $this->dailyReadRequestDayGrowthRatio->validate();
        }
        if (null !== $this->dailyWriteRequest) {
            $this->dailyWriteRequest->validate();
        }
        if (null !== $this->dailyWriteRequestDayGrowthRatio) {
            $this->dailyWriteRequestDayGrowthRatio->validate();
        }
        if (null !== $this->regionCount) {
            $this->regionCount->validate();
        }
        if (null !== $this->totalReadRequest) {
            $this->totalReadRequest->validate();
        }
        if (null !== $this->totalRequest) {
            $this->totalRequest->validate();
        }
        if (null !== $this->totalWriteRequest) {
            $this->totalWriteRequest->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avgGc) {
            $res['AvgGc'] = null !== $this->avgGc ? $this->avgGc->toArray($noStream) : $this->avgGc;
        }

        if (null !== $this->cacheRatio) {
            $res['CacheRatio'] = null !== $this->cacheRatio ? $this->cacheRatio->toArray($noStream) : $this->cacheRatio;
        }

        if (null !== $this->dailyReadRequest) {
            $res['DailyReadRequest'] = null !== $this->dailyReadRequest ? $this->dailyReadRequest->toArray($noStream) : $this->dailyReadRequest;
        }

        if (null !== $this->dailyReadRequestDayGrowthRatio) {
            $res['DailyReadRequestDayGrowthRatio'] = null !== $this->dailyReadRequestDayGrowthRatio ? $this->dailyReadRequestDayGrowthRatio->toArray($noStream) : $this->dailyReadRequestDayGrowthRatio;
        }

        if (null !== $this->dailyWriteRequest) {
            $res['DailyWriteRequest'] = null !== $this->dailyWriteRequest ? $this->dailyWriteRequest->toArray($noStream) : $this->dailyWriteRequest;
        }

        if (null !== $this->dailyWriteRequestDayGrowthRatio) {
            $res['DailyWriteRequestDayGrowthRatio'] = null !== $this->dailyWriteRequestDayGrowthRatio ? $this->dailyWriteRequestDayGrowthRatio->toArray($noStream) : $this->dailyWriteRequestDayGrowthRatio;
        }

        if (null !== $this->regionCount) {
            $res['RegionCount'] = null !== $this->regionCount ? $this->regionCount->toArray($noStream) : $this->regionCount;
        }

        if (null !== $this->totalReadRequest) {
            $res['TotalReadRequest'] = null !== $this->totalReadRequest ? $this->totalReadRequest->toArray($noStream) : $this->totalReadRequest;
        }

        if (null !== $this->totalRequest) {
            $res['TotalRequest'] = null !== $this->totalRequest ? $this->totalRequest->toArray($noStream) : $this->totalRequest;
        }

        if (null !== $this->totalWriteRequest) {
            $res['TotalWriteRequest'] = null !== $this->totalWriteRequest ? $this->totalWriteRequest->toArray($noStream) : $this->totalWriteRequest;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgGc'])) {
            $model->avgGc = avgGc::fromMap($map['AvgGc']);
        }

        if (isset($map['CacheRatio'])) {
            $model->cacheRatio = cacheRatio::fromMap($map['CacheRatio']);
        }

        if (isset($map['DailyReadRequest'])) {
            $model->dailyReadRequest = dailyReadRequest::fromMap($map['DailyReadRequest']);
        }

        if (isset($map['DailyReadRequestDayGrowthRatio'])) {
            $model->dailyReadRequestDayGrowthRatio = dailyReadRequestDayGrowthRatio::fromMap($map['DailyReadRequestDayGrowthRatio']);
        }

        if (isset($map['DailyWriteRequest'])) {
            $model->dailyWriteRequest = dailyWriteRequest::fromMap($map['DailyWriteRequest']);
        }

        if (isset($map['DailyWriteRequestDayGrowthRatio'])) {
            $model->dailyWriteRequestDayGrowthRatio = dailyWriteRequestDayGrowthRatio::fromMap($map['DailyWriteRequestDayGrowthRatio']);
        }

        if (isset($map['RegionCount'])) {
            $model->regionCount = regionCount::fromMap($map['RegionCount']);
        }

        if (isset($map['TotalReadRequest'])) {
            $model->totalReadRequest = totalReadRequest::fromMap($map['TotalReadRequest']);
        }

        if (isset($map['TotalRequest'])) {
            $model->totalRequest = totalRequest::fromMap($map['TotalRequest']);
        }

        if (isset($map['TotalWriteRequest'])) {
            $model->totalWriteRequest = totalWriteRequest::fromMap($map['TotalWriteRequest']);
        }

        return $model;
    }
}
