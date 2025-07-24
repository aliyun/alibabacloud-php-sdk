<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data;

use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data\metrics\coldAccessDay;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data\metrics\coldConfigDay;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data\metrics\coldDataSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data\metrics\dailyReadRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data\metrics\dailyReadRequestDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data\metrics\dailyWriteRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data\metrics\dailyWriteRequestDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data\metrics\freezeConfigDay;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data\metrics\freezeDataSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data\metrics\hotDataSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data\metrics\locality;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data\metrics\readRequestBalance;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data\metrics\regionBalance;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data\metrics\regionCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data\metrics\regionCountDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data\metrics\regionServerCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data\metrics\requestBalance;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data\metrics\storeFileCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data\metrics\storeFileCountDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data\metrics\tableSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data\metrics\tableSizeDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data\metrics\warmConfigDay;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data\metrics\warmDataSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data\metrics\writeRequestBalance;
use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @description Number of days the table has not been accessed.
     *
     * @var coldAccessDay
     */
    public $coldAccessDay;

    /**
     * @description Cold data access days configuration.
     *
     * @var coldConfigDay
     */
    public $coldConfigDay;

    /**
     * @description Cold data size.
     *
     * @var coldDataSize
     */
    public $coldDataSize;

    /**
     * @description Number of read requests per day.
     *
     * @var dailyReadRequest
     */
    public $dailyReadRequest;

    /**
     * @description Daily growth ratio of daily read requests.
     *
     * @var dailyReadRequestDayGrowthRatio
     */
    public $dailyReadRequestDayGrowthRatio;

    /**
     * @description Number of write requests per day.
     *
     * @var dailyWriteRequest
     */
    public $dailyWriteRequest;

    /**
     * @description Daily write request growth ratio.
     *
     * @var dailyWriteRequestDayGrowthRatio
     */
    public $dailyWriteRequestDayGrowthRatio;

    /**
     * @description Configuration for the number of days cold data is accessed.
     *
     * @var freezeConfigDay
     */
    public $freezeConfigDay;

    /**
     * @description Frozen data size.
     *
     * @var freezeDataSize
     */
    public $freezeDataSize;

    /**
     * @description Hot data size.
     *
     * @var hotDataSize
     */
    public $hotDataSize;

    /**
     * @description Locality rate.
     *
     * @var locality
     */
    public $locality;

    /**
     * @description Read request balance.
     *
     * @var readRequestBalance
     */
    public $readRequestBalance;

    /**
     * @description Region balance.
     *
     * @var regionBalance
     */
    public $regionBalance;

    /**
     * @description Number of regions.
     *
     * @var regionCount
     */
    public $regionCount;

    /**
     * @description Daily incremental ratio of regions
     *
     * @var regionCountDayGrowthRatio
     */
    public $regionCountDayGrowthRatio;

    /**
     * @description Number of RegionServers.
     *
     * @var regionServerCount
     */
    public $regionServerCount;

    /**
     * @description Request balance.
     *
     * @var requestBalance
     */
    public $requestBalance;

    /**
     * @description Number of store files.
     *
     * @var storeFileCount
     */
    public $storeFileCount;

    /**
     * @description Daily growth ratio of store file count.
     *
     * @var storeFileCountDayGrowthRatio
     */
    public $storeFileCountDayGrowthRatio;

    /**
     * @description Table size.
     *
     * @var tableSize
     */
    public $tableSize;

    /**
     * @description Daily growth ratio of table size.
     *
     * @var tableSizeDayGrowthRatio
     */
    public $tableSizeDayGrowthRatio;

    /**
     * @description Warm data access days configuration.
     *
     * @var warmConfigDay
     */
    public $warmConfigDay;

    /**
     * @description Warm data size.
     *
     * @var warmDataSize
     */
    public $warmDataSize;

    /**
     * @description Write request balance.
     *
     * @var writeRequestBalance
     */
    public $writeRequestBalance;
    protected $_name = [
        'coldAccessDay' => 'ColdAccessDay',
        'coldConfigDay' => 'ColdConfigDay',
        'coldDataSize' => 'ColdDataSize',
        'dailyReadRequest' => 'DailyReadRequest',
        'dailyReadRequestDayGrowthRatio' => 'DailyReadRequestDayGrowthRatio',
        'dailyWriteRequest' => 'DailyWriteRequest',
        'dailyWriteRequestDayGrowthRatio' => 'DailyWriteRequestDayGrowthRatio',
        'freezeConfigDay' => 'FreezeConfigDay',
        'freezeDataSize' => 'FreezeDataSize',
        'hotDataSize' => 'HotDataSize',
        'locality' => 'Locality',
        'readRequestBalance' => 'ReadRequestBalance',
        'regionBalance' => 'RegionBalance',
        'regionCount' => 'RegionCount',
        'regionCountDayGrowthRatio' => 'RegionCountDayGrowthRatio',
        'regionServerCount' => 'RegionServerCount',
        'requestBalance' => 'RequestBalance',
        'storeFileCount' => 'StoreFileCount',
        'storeFileCountDayGrowthRatio' => 'StoreFileCountDayGrowthRatio',
        'tableSize' => 'TableSize',
        'tableSizeDayGrowthRatio' => 'TableSizeDayGrowthRatio',
        'warmConfigDay' => 'WarmConfigDay',
        'warmDataSize' => 'WarmDataSize',
        'writeRequestBalance' => 'WriteRequestBalance',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->coldAccessDay) {
            $res['ColdAccessDay'] = null !== $this->coldAccessDay ? $this->coldAccessDay->toMap() : null;
        }
        if (null !== $this->coldConfigDay) {
            $res['ColdConfigDay'] = null !== $this->coldConfigDay ? $this->coldConfigDay->toMap() : null;
        }
        if (null !== $this->coldDataSize) {
            $res['ColdDataSize'] = null !== $this->coldDataSize ? $this->coldDataSize->toMap() : null;
        }
        if (null !== $this->dailyReadRequest) {
            $res['DailyReadRequest'] = null !== $this->dailyReadRequest ? $this->dailyReadRequest->toMap() : null;
        }
        if (null !== $this->dailyReadRequestDayGrowthRatio) {
            $res['DailyReadRequestDayGrowthRatio'] = null !== $this->dailyReadRequestDayGrowthRatio ? $this->dailyReadRequestDayGrowthRatio->toMap() : null;
        }
        if (null !== $this->dailyWriteRequest) {
            $res['DailyWriteRequest'] = null !== $this->dailyWriteRequest ? $this->dailyWriteRequest->toMap() : null;
        }
        if (null !== $this->dailyWriteRequestDayGrowthRatio) {
            $res['DailyWriteRequestDayGrowthRatio'] = null !== $this->dailyWriteRequestDayGrowthRatio ? $this->dailyWriteRequestDayGrowthRatio->toMap() : null;
        }
        if (null !== $this->freezeConfigDay) {
            $res['FreezeConfigDay'] = null !== $this->freezeConfigDay ? $this->freezeConfigDay->toMap() : null;
        }
        if (null !== $this->freezeDataSize) {
            $res['FreezeDataSize'] = null !== $this->freezeDataSize ? $this->freezeDataSize->toMap() : null;
        }
        if (null !== $this->hotDataSize) {
            $res['HotDataSize'] = null !== $this->hotDataSize ? $this->hotDataSize->toMap() : null;
        }
        if (null !== $this->locality) {
            $res['Locality'] = null !== $this->locality ? $this->locality->toMap() : null;
        }
        if (null !== $this->readRequestBalance) {
            $res['ReadRequestBalance'] = null !== $this->readRequestBalance ? $this->readRequestBalance->toMap() : null;
        }
        if (null !== $this->regionBalance) {
            $res['RegionBalance'] = null !== $this->regionBalance ? $this->regionBalance->toMap() : null;
        }
        if (null !== $this->regionCount) {
            $res['RegionCount'] = null !== $this->regionCount ? $this->regionCount->toMap() : null;
        }
        if (null !== $this->regionCountDayGrowthRatio) {
            $res['RegionCountDayGrowthRatio'] = null !== $this->regionCountDayGrowthRatio ? $this->regionCountDayGrowthRatio->toMap() : null;
        }
        if (null !== $this->regionServerCount) {
            $res['RegionServerCount'] = null !== $this->regionServerCount ? $this->regionServerCount->toMap() : null;
        }
        if (null !== $this->requestBalance) {
            $res['RequestBalance'] = null !== $this->requestBalance ? $this->requestBalance->toMap() : null;
        }
        if (null !== $this->storeFileCount) {
            $res['StoreFileCount'] = null !== $this->storeFileCount ? $this->storeFileCount->toMap() : null;
        }
        if (null !== $this->storeFileCountDayGrowthRatio) {
            $res['StoreFileCountDayGrowthRatio'] = null !== $this->storeFileCountDayGrowthRatio ? $this->storeFileCountDayGrowthRatio->toMap() : null;
        }
        if (null !== $this->tableSize) {
            $res['TableSize'] = null !== $this->tableSize ? $this->tableSize->toMap() : null;
        }
        if (null !== $this->tableSizeDayGrowthRatio) {
            $res['TableSizeDayGrowthRatio'] = null !== $this->tableSizeDayGrowthRatio ? $this->tableSizeDayGrowthRatio->toMap() : null;
        }
        if (null !== $this->warmConfigDay) {
            $res['WarmConfigDay'] = null !== $this->warmConfigDay ? $this->warmConfigDay->toMap() : null;
        }
        if (null !== $this->warmDataSize) {
            $res['WarmDataSize'] = null !== $this->warmDataSize ? $this->warmDataSize->toMap() : null;
        }
        if (null !== $this->writeRequestBalance) {
            $res['WriteRequestBalance'] = null !== $this->writeRequestBalance ? $this->writeRequestBalance->toMap() : null;
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
        if (isset($map['ColdAccessDay'])) {
            $model->coldAccessDay = coldAccessDay::fromMap($map['ColdAccessDay']);
        }
        if (isset($map['ColdConfigDay'])) {
            $model->coldConfigDay = coldConfigDay::fromMap($map['ColdConfigDay']);
        }
        if (isset($map['ColdDataSize'])) {
            $model->coldDataSize = coldDataSize::fromMap($map['ColdDataSize']);
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
        if (isset($map['FreezeConfigDay'])) {
            $model->freezeConfigDay = freezeConfigDay::fromMap($map['FreezeConfigDay']);
        }
        if (isset($map['FreezeDataSize'])) {
            $model->freezeDataSize = freezeDataSize::fromMap($map['FreezeDataSize']);
        }
        if (isset($map['HotDataSize'])) {
            $model->hotDataSize = hotDataSize::fromMap($map['HotDataSize']);
        }
        if (isset($map['Locality'])) {
            $model->locality = locality::fromMap($map['Locality']);
        }
        if (isset($map['ReadRequestBalance'])) {
            $model->readRequestBalance = readRequestBalance::fromMap($map['ReadRequestBalance']);
        }
        if (isset($map['RegionBalance'])) {
            $model->regionBalance = regionBalance::fromMap($map['RegionBalance']);
        }
        if (isset($map['RegionCount'])) {
            $model->regionCount = regionCount::fromMap($map['RegionCount']);
        }
        if (isset($map['RegionCountDayGrowthRatio'])) {
            $model->regionCountDayGrowthRatio = regionCountDayGrowthRatio::fromMap($map['RegionCountDayGrowthRatio']);
        }
        if (isset($map['RegionServerCount'])) {
            $model->regionServerCount = regionServerCount::fromMap($map['RegionServerCount']);
        }
        if (isset($map['RequestBalance'])) {
            $model->requestBalance = requestBalance::fromMap($map['RequestBalance']);
        }
        if (isset($map['StoreFileCount'])) {
            $model->storeFileCount = storeFileCount::fromMap($map['StoreFileCount']);
        }
        if (isset($map['StoreFileCountDayGrowthRatio'])) {
            $model->storeFileCountDayGrowthRatio = storeFileCountDayGrowthRatio::fromMap($map['StoreFileCountDayGrowthRatio']);
        }
        if (isset($map['TableSize'])) {
            $model->tableSize = tableSize::fromMap($map['TableSize']);
        }
        if (isset($map['TableSizeDayGrowthRatio'])) {
            $model->tableSizeDayGrowthRatio = tableSizeDayGrowthRatio::fromMap($map['TableSizeDayGrowthRatio']);
        }
        if (isset($map['WarmConfigDay'])) {
            $model->warmConfigDay = warmConfigDay::fromMap($map['WarmConfigDay']);
        }
        if (isset($map['WarmDataSize'])) {
            $model->warmDataSize = warmDataSize::fromMap($map['WarmDataSize']);
        }
        if (isset($map['WriteRequestBalance'])) {
            $model->writeRequestBalance = writeRequestBalance::fromMap($map['WriteRequestBalance']);
        }

        return $model;
    }
}
