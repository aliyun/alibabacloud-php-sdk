<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseClusterResponseBody\data;

use AlibabaCloud\Dara\Model;
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
        if (null !== $this->avgLoad) {
            $this->avgLoad->validate();
        }
        if (null !== $this->dailyReadRequest) {
            $this->dailyReadRequest->validate();
        }
        if (null !== $this->dailyWriteRequest) {
            $this->dailyWriteRequest->validate();
        }
        if (null !== $this->memHeap) {
            $this->memHeap->validate();
        }
        if (null !== $this->normalAvgLoad) {
            $this->normalAvgLoad->validate();
        }
        if (null !== $this->regionBalance) {
            $this->regionBalance->validate();
        }
        if (null !== $this->regionCount) {
            $this->regionCount->validate();
        }
        if (null !== $this->regionServerCount) {
            $this->regionServerCount->validate();
        }
        if (null !== $this->storeFileCount) {
            $this->storeFileCount->validate();
        }
        if (null !== $this->tableCount) {
            $this->tableCount->validate();
        }
        if (null !== $this->totalDataSize) {
            $this->totalDataSize->validate();
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
        if (null !== $this->avgLoad) {
            $res['AvgLoad'] = null !== $this->avgLoad ? $this->avgLoad->toArray($noStream) : $this->avgLoad;
        }

        if (null !== $this->dailyReadRequest) {
            $res['DailyReadRequest'] = null !== $this->dailyReadRequest ? $this->dailyReadRequest->toArray($noStream) : $this->dailyReadRequest;
        }

        if (null !== $this->dailyWriteRequest) {
            $res['DailyWriteRequest'] = null !== $this->dailyWriteRequest ? $this->dailyWriteRequest->toArray($noStream) : $this->dailyWriteRequest;
        }

        if (null !== $this->memHeap) {
            $res['MemHeap'] = null !== $this->memHeap ? $this->memHeap->toArray($noStream) : $this->memHeap;
        }

        if (null !== $this->normalAvgLoad) {
            $res['NormalAvgLoad'] = null !== $this->normalAvgLoad ? $this->normalAvgLoad->toArray($noStream) : $this->normalAvgLoad;
        }

        if (null !== $this->regionBalance) {
            $res['RegionBalance'] = null !== $this->regionBalance ? $this->regionBalance->toArray($noStream) : $this->regionBalance;
        }

        if (null !== $this->regionCount) {
            $res['RegionCount'] = null !== $this->regionCount ? $this->regionCount->toArray($noStream) : $this->regionCount;
        }

        if (null !== $this->regionServerCount) {
            $res['RegionServerCount'] = null !== $this->regionServerCount ? $this->regionServerCount->toArray($noStream) : $this->regionServerCount;
        }

        if (null !== $this->storeFileCount) {
            $res['StoreFileCount'] = null !== $this->storeFileCount ? $this->storeFileCount->toArray($noStream) : $this->storeFileCount;
        }

        if (null !== $this->tableCount) {
            $res['TableCount'] = null !== $this->tableCount ? $this->tableCount->toArray($noStream) : $this->tableCount;
        }

        if (null !== $this->totalDataSize) {
            $res['TotalDataSize'] = null !== $this->totalDataSize ? $this->totalDataSize->toArray($noStream) : $this->totalDataSize;
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
