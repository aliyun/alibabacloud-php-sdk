<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionResponseBody\data;

use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionResponseBody\data\metrics\dailyReadRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionResponseBody\data\metrics\dailyWriteRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionResponseBody\data\metrics\storeFileCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionResponseBody\data\metrics\totalReadRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionResponseBody\data\metrics\totalWriteRequest;
use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @var dailyReadRequest
     */
    public $dailyReadRequest;

    /**
     * @var dailyWriteRequest
     */
    public $dailyWriteRequest;

    /**
     * @description The number of StoreFiles.
     *
     * @var storeFileCount
     */
    public $storeFileCount;

    /**
     * @var totalReadRequest
     */
    public $totalReadRequest;

    /**
     * @var totalWriteRequest
     */
    public $totalWriteRequest;
    protected $_name = [
        'dailyReadRequest'  => 'DailyReadRequest',
        'dailyWriteRequest' => 'DailyWriteRequest',
        'storeFileCount'    => 'StoreFileCount',
        'totalReadRequest'  => 'TotalReadRequest',
        'totalWriteRequest' => 'TotalWriteRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dailyReadRequest) {
            $res['DailyReadRequest'] = null !== $this->dailyReadRequest ? $this->dailyReadRequest->toMap() : null;
        }
        if (null !== $this->dailyWriteRequest) {
            $res['DailyWriteRequest'] = null !== $this->dailyWriteRequest ? $this->dailyWriteRequest->toMap() : null;
        }
        if (null !== $this->storeFileCount) {
            $res['StoreFileCount'] = null !== $this->storeFileCount ? $this->storeFileCount->toMap() : null;
        }
        if (null !== $this->totalReadRequest) {
            $res['TotalReadRequest'] = null !== $this->totalReadRequest ? $this->totalReadRequest->toMap() : null;
        }
        if (null !== $this->totalWriteRequest) {
            $res['TotalWriteRequest'] = null !== $this->totalWriteRequest ? $this->totalWriteRequest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DailyReadRequest'])) {
            $model->dailyReadRequest = dailyReadRequest::fromMap($map['DailyReadRequest']);
        }
        if (isset($map['DailyWriteRequest'])) {
            $model->dailyWriteRequest = dailyWriteRequest::fromMap($map['DailyWriteRequest']);
        }
        if (isset($map['StoreFileCount'])) {
            $model->storeFileCount = storeFileCount::fromMap($map['StoreFileCount']);
        }
        if (isset($map['TotalReadRequest'])) {
            $model->totalReadRequest = totalReadRequest::fromMap($map['TotalReadRequest']);
        }
        if (isset($map['TotalWriteRequest'])) {
            $model->totalWriteRequest = totalWriteRequest::fromMap($map['TotalWriteRequest']);
        }

        return $model;
    }
}
