<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data;

use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data\metrics\coldAccessDay;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data\metrics\coldConfigDay;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data\metrics\coldDataSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data\metrics\dailyReadRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data\metrics\dailyReadRequestDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data\metrics\dailyWriteRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data\metrics\dailyWriteRequestDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data\metrics\freezeConfigDay;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data\metrics\freezeDataSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data\metrics\hotDataSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data\metrics\locality;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data\metrics\readRequestBalance;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data\metrics\regionBalance;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data\metrics\regionCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data\metrics\regionCountDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data\metrics\regionServerCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data\metrics\requestBalance;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data\metrics\storeFileCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data\metrics\storeFileCountDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data\metrics\tableSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data\metrics\tableSizeDayGrowthRatio;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data\metrics\warmConfigDay;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data\metrics\warmDataSize;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data\metrics\writeRequestBalance;
use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @description The number of days during which the table was not accessed.
     *
     * @var coldAccessDay
     */
    public $coldAccessDay;

    /**
     * @description The number of consecutive days without access to data before the data is considered as cold data.
     *
     * @var coldConfigDay
     */
    public $coldConfigDay;

    /**
     * @description The size of cold data.
     *
     * @var coldDataSize
     */
    public $coldDataSize;

    /**
     * @description The total number of read requests for the table in a day.
     *
     * @var dailyReadRequest
     */
    public $dailyReadRequest;

    /**
     * @description The daily increment ratio of the number of read requests in a day.
     *
     * @var dailyReadRequestDayGrowthRatio
     */
    public $dailyReadRequestDayGrowthRatio;

    /**
     * @description The total number of write requests for the table in a day.
     *
     * @var dailyWriteRequest
     */
    public $dailyWriteRequest;

    /**
     * @description The daily increment ratio of the number of write requests in a day.
     *
     * @var dailyWriteRequestDayGrowthRatio
     */
    public $dailyWriteRequestDayGrowthRatio;

    /**
     * @description The number of consecutive days without access to data before the data is considered as very cold data.
     *
     * @var freezeConfigDay
     */
    public $freezeConfigDay;

    /**
     * @description The size of very cold data.
     *
     * @var freezeDataSize
     */
    public $freezeDataSize;

    /**
     * @description The size of hot data.
     *
     * @var hotDataSize
     */
    public $hotDataSize;

    /**
     * @description The localization rate.
     *
     * @var locality
     */
    public $locality;

    /**
     * @description The read balancing degree.
     *
     * @var readRequestBalance
     */
    public $readRequestBalance;

    /**
     * @description The balancing degree.
     *
     * @var regionBalance
     */
    public $regionBalance;

    /**
     * @description The number of partitions that are composed of the table.
     *
     * @var regionCount
     */
    public $regionCount;

    /**
     * @description The daily increment ratio of the number of partitions.
     *
     * @var regionCountDayGrowthRatio
     */
    public $regionCountDayGrowthRatio;

    /**
     * @description The number of region servers that host the table.
     *
     * @var regionServerCount
     */
    public $regionServerCount;

    /**
     * @description The request balancing degree.
     *
     * @var requestBalance
     */
    public $requestBalance;

    /**
     * @description The number of StoreFiles.
     *
     * @var storeFileCount
     */
    public $storeFileCount;

    /**
     * @description The daily increment ratio of the number of StoreFiles.
     *
     * @var storeFileCountDayGrowthRatio
     */
    public $storeFileCountDayGrowthRatio;

    /**
     * @description The size of the table.
     *
     * @var tableSize
     */
    public $tableSize;

    /**
     * @description The daily increment ratio of the table size.
     *
     * @var tableSizeDayGrowthRatio
     */
    public $tableSizeDayGrowthRatio;

    /**
     * @description The number of consecutive days without access to data before the data is considered as warm data.
     *
     * @var warmConfigDay
     */
    public $warmConfigDay;

    /**
     * @description The size of warm data.
     *
     * @var warmDataSize
     */
    public $warmDataSize;

    /**
     * @description The write balancing degree.
     *
     * @var writeRequestBalance
     */
    public $writeRequestBalance;
    protected $_name = [
        'coldAccessDay'                   => 'ColdAccessDay',
        'coldConfigDay'                   => 'ColdConfigDay',
        'coldDataSize'                    => 'ColdDataSize',
        'dailyReadRequest'                => 'DailyReadRequest',
        'dailyReadRequestDayGrowthRatio'  => 'DailyReadRequestDayGrowthRatio',
        'dailyWriteRequest'               => 'DailyWriteRequest',
        'dailyWriteRequestDayGrowthRatio' => 'DailyWriteRequestDayGrowthRatio',
        'freezeConfigDay'                 => 'FreezeConfigDay',
        'freezeDataSize'                  => 'FreezeDataSize',
        'hotDataSize'                     => 'HotDataSize',
        'locality'                        => 'Locality',
        'readRequestBalance'              => 'ReadRequestBalance',
        'regionBalance'                   => 'RegionBalance',
        'regionCount'                     => 'RegionCount',
        'regionCountDayGrowthRatio'       => 'RegionCountDayGrowthRatio',
        'regionServerCount'               => 'RegionServerCount',
        'requestBalance'                  => 'RequestBalance',
        'storeFileCount'                  => 'StoreFileCount',
        'storeFileCountDayGrowthRatio'    => 'StoreFileCountDayGrowthRatio',
        'tableSize'                       => 'TableSize',
        'tableSizeDayGrowthRatio'         => 'TableSizeDayGrowthRatio',
        'warmConfigDay'                   => 'WarmConfigDay',
        'warmDataSize'                    => 'WarmDataSize',
        'writeRequestBalance'             => 'WriteRequestBalance',
    ];

    public function validate()
    {
    }

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
