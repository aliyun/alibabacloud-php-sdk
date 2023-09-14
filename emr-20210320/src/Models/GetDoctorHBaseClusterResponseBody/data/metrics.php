<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseClusterResponseBody\data;

use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseClusterResponseBody\data\metrics\avgLoad;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseClusterResponseBody\data\metrics\dailyReadRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseClusterResponseBody\data\metrics\dailyWriteRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseClusterResponseBody\data\metrics\memHeap;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseClusterResponseBody\data\metrics\normalAvgLoad;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseClusterResponseBody\data\metrics\regionBalance;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseClusterResponseBody\data\metrics\regionCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseClusterResponseBody\data\metrics\regionServerCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseClusterResponseBody\data\metrics\storeFileCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseClusterResponseBody\data\metrics\tableCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseClusterResponseBody\data\metrics\totalDataSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseClusterResponseBody\data\metrics\totalReadRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseClusterResponseBody\data\metrics\totalRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseClusterResponseBody\data\metrics\totalWriteRequest;
use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @var avgLoad
     */
    public $avgLoad;

    /**
     * @var dailyReadRequest
     */
    public $dailyReadRequest;

    /**
     * @var dailyWriteRequest
     */
    public $dailyWriteRequest;

    /**
     * @var memHeap
     */
    public $memHeap;

    /**
     * @var normalAvgLoad
     */
    public $normalAvgLoad;

    /**
     * @var regionBalance
     */
    public $regionBalance;

    /**
     * @var regionCount
     */
    public $regionCount;

    /**
     * @var regionServerCount
     */
    public $regionServerCount;

    /**
     * @var storeFileCount
     */
    public $storeFileCount;

    /**
     * @var tableCount
     */
    public $tableCount;

    /**
     * @var totalDataSize
     */
    public $totalDataSize;

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
        'avgLoad'           => 'AvgLoad',
        'dailyReadRequest'  => 'DailyReadRequest',
        'dailyWriteRequest' => 'DailyWriteRequest',
        'memHeap'           => 'MemHeap',
        'normalAvgLoad'     => 'NormalAvgLoad',
        'regionBalance'     => 'RegionBalance',
        'regionCount'       => 'RegionCount',
        'regionServerCount' => 'RegionServerCount',
        'storeFileCount'    => 'StoreFileCount',
        'tableCount'        => 'TableCount',
        'totalDataSize'     => 'TotalDataSize',
        'totalReadRequest'  => 'TotalReadRequest',
        'totalRequest'      => 'TotalRequest',
        'totalWriteRequest' => 'TotalWriteRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgLoad) {
            $res['AvgLoad'] = null !== $this->avgLoad ? $this->avgLoad->toMap() : null;
        }
        if (null !== $this->dailyReadRequest) {
            $res['DailyReadRequest'] = null !== $this->dailyReadRequest ? $this->dailyReadRequest->toMap() : null;
        }
        if (null !== $this->dailyWriteRequest) {
            $res['DailyWriteRequest'] = null !== $this->dailyWriteRequest ? $this->dailyWriteRequest->toMap() : null;
        }
        if (null !== $this->memHeap) {
            $res['MemHeap'] = null !== $this->memHeap ? $this->memHeap->toMap() : null;
        }
        if (null !== $this->normalAvgLoad) {
            $res['NormalAvgLoad'] = null !== $this->normalAvgLoad ? $this->normalAvgLoad->toMap() : null;
        }
        if (null !== $this->regionBalance) {
            $res['RegionBalance'] = null !== $this->regionBalance ? $this->regionBalance->toMap() : null;
        }
        if (null !== $this->regionCount) {
            $res['RegionCount'] = null !== $this->regionCount ? $this->regionCount->toMap() : null;
        }
        if (null !== $this->regionServerCount) {
            $res['RegionServerCount'] = null !== $this->regionServerCount ? $this->regionServerCount->toMap() : null;
        }
        if (null !== $this->storeFileCount) {
            $res['StoreFileCount'] = null !== $this->storeFileCount ? $this->storeFileCount->toMap() : null;
        }
        if (null !== $this->tableCount) {
            $res['TableCount'] = null !== $this->tableCount ? $this->tableCount->toMap() : null;
        }
        if (null !== $this->totalDataSize) {
            $res['TotalDataSize'] = null !== $this->totalDataSize ? $this->totalDataSize->toMap() : null;
        }
        if (null !== $this->totalReadRequest) {
            $res['TotalReadRequest'] = null !== $this->totalReadRequest ? $this->totalReadRequest->toMap() : null;
        }
        if (null !== $this->totalRequest) {
            $res['TotalRequest'] = null !== $this->totalRequest ? $this->totalRequest->toMap() : null;
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
        if (isset($map['AvgLoad'])) {
            $model->avgLoad = avgLoad::fromMap($map['AvgLoad']);
        }
        if (isset($map['DailyReadRequest'])) {
            $model->dailyReadRequest = dailyReadRequest::fromMap($map['DailyReadRequest']);
        }
        if (isset($map['DailyWriteRequest'])) {
            $model->dailyWriteRequest = dailyWriteRequest::fromMap($map['DailyWriteRequest']);
        }
        if (isset($map['MemHeap'])) {
            $model->memHeap = memHeap::fromMap($map['MemHeap']);
        }
        if (isset($map['NormalAvgLoad'])) {
            $model->normalAvgLoad = normalAvgLoad::fromMap($map['NormalAvgLoad']);
        }
        if (isset($map['RegionBalance'])) {
            $model->regionBalance = regionBalance::fromMap($map['RegionBalance']);
        }
        if (isset($map['RegionCount'])) {
            $model->regionCount = regionCount::fromMap($map['RegionCount']);
        }
        if (isset($map['RegionServerCount'])) {
            $model->regionServerCount = regionServerCount::fromMap($map['RegionServerCount']);
        }
        if (isset($map['StoreFileCount'])) {
            $model->storeFileCount = storeFileCount::fromMap($map['StoreFileCount']);
        }
        if (isset($map['TableCount'])) {
            $model->tableCount = tableCount::fromMap($map['TableCount']);
        }
        if (isset($map['TotalDataSize'])) {
            $model->totalDataSize = totalDataSize::fromMap($map['TotalDataSize']);
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
