<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data;

use AlibabaCloud\Dara\Model;
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

class metrics extends Model
{
    /**
     * @var coldAccessDay
     */
    public $coldAccessDay;

    /**
     * @var coldConfigDay
     */
    public $coldConfigDay;

    /**
     * @var coldDataSize
     */
    public $coldDataSize;

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
     * @var freezeConfigDay
     */
    public $freezeConfigDay;

    /**
     * @var freezeDataSize
     */
    public $freezeDataSize;

    /**
     * @var hotDataSize
     */
    public $hotDataSize;

    /**
     * @var locality
     */
    public $locality;

    /**
     * @var readRequestBalance
     */
    public $readRequestBalance;

    /**
     * @var regionBalance
     */
    public $regionBalance;

    /**
     * @var regionCount
     */
    public $regionCount;

    /**
     * @var regionCountDayGrowthRatio
     */
    public $regionCountDayGrowthRatio;

    /**
     * @var regionServerCount
     */
    public $regionServerCount;

    /**
     * @var requestBalance
     */
    public $requestBalance;

    /**
     * @var storeFileCount
     */
    public $storeFileCount;

    /**
     * @var storeFileCountDayGrowthRatio
     */
    public $storeFileCountDayGrowthRatio;

    /**
     * @var tableSize
     */
    public $tableSize;

    /**
     * @var tableSizeDayGrowthRatio
     */
    public $tableSizeDayGrowthRatio;

    /**
     * @var warmConfigDay
     */
    public $warmConfigDay;

    /**
     * @var warmDataSize
     */
    public $warmDataSize;

    /**
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

    public function validate()
    {
        if (null !== $this->coldAccessDay) {
            $this->coldAccessDay->validate();
        }
        if (null !== $this->coldConfigDay) {
            $this->coldConfigDay->validate();
        }
        if (null !== $this->coldDataSize) {
            $this->coldDataSize->validate();
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
        if (null !== $this->freezeConfigDay) {
            $this->freezeConfigDay->validate();
        }
        if (null !== $this->freezeDataSize) {
            $this->freezeDataSize->validate();
        }
        if (null !== $this->hotDataSize) {
            $this->hotDataSize->validate();
        }
        if (null !== $this->locality) {
            $this->locality->validate();
        }
        if (null !== $this->readRequestBalance) {
            $this->readRequestBalance->validate();
        }
        if (null !== $this->regionBalance) {
            $this->regionBalance->validate();
        }
        if (null !== $this->regionCount) {
            $this->regionCount->validate();
        }
        if (null !== $this->regionCountDayGrowthRatio) {
            $this->regionCountDayGrowthRatio->validate();
        }
        if (null !== $this->regionServerCount) {
            $this->regionServerCount->validate();
        }
        if (null !== $this->requestBalance) {
            $this->requestBalance->validate();
        }
        if (null !== $this->storeFileCount) {
            $this->storeFileCount->validate();
        }
        if (null !== $this->storeFileCountDayGrowthRatio) {
            $this->storeFileCountDayGrowthRatio->validate();
        }
        if (null !== $this->tableSize) {
            $this->tableSize->validate();
        }
        if (null !== $this->tableSizeDayGrowthRatio) {
            $this->tableSizeDayGrowthRatio->validate();
        }
        if (null !== $this->warmConfigDay) {
            $this->warmConfigDay->validate();
        }
        if (null !== $this->warmDataSize) {
            $this->warmDataSize->validate();
        }
        if (null !== $this->writeRequestBalance) {
            $this->writeRequestBalance->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coldAccessDay) {
            $res['ColdAccessDay'] = null !== $this->coldAccessDay ? $this->coldAccessDay->toArray($noStream) : $this->coldAccessDay;
        }

        if (null !== $this->coldConfigDay) {
            $res['ColdConfigDay'] = null !== $this->coldConfigDay ? $this->coldConfigDay->toArray($noStream) : $this->coldConfigDay;
        }

        if (null !== $this->coldDataSize) {
            $res['ColdDataSize'] = null !== $this->coldDataSize ? $this->coldDataSize->toArray($noStream) : $this->coldDataSize;
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

        if (null !== $this->freezeConfigDay) {
            $res['FreezeConfigDay'] = null !== $this->freezeConfigDay ? $this->freezeConfigDay->toArray($noStream) : $this->freezeConfigDay;
        }

        if (null !== $this->freezeDataSize) {
            $res['FreezeDataSize'] = null !== $this->freezeDataSize ? $this->freezeDataSize->toArray($noStream) : $this->freezeDataSize;
        }

        if (null !== $this->hotDataSize) {
            $res['HotDataSize'] = null !== $this->hotDataSize ? $this->hotDataSize->toArray($noStream) : $this->hotDataSize;
        }

        if (null !== $this->locality) {
            $res['Locality'] = null !== $this->locality ? $this->locality->toArray($noStream) : $this->locality;
        }

        if (null !== $this->readRequestBalance) {
            $res['ReadRequestBalance'] = null !== $this->readRequestBalance ? $this->readRequestBalance->toArray($noStream) : $this->readRequestBalance;
        }

        if (null !== $this->regionBalance) {
            $res['RegionBalance'] = null !== $this->regionBalance ? $this->regionBalance->toArray($noStream) : $this->regionBalance;
        }

        if (null !== $this->regionCount) {
            $res['RegionCount'] = null !== $this->regionCount ? $this->regionCount->toArray($noStream) : $this->regionCount;
        }

        if (null !== $this->regionCountDayGrowthRatio) {
            $res['RegionCountDayGrowthRatio'] = null !== $this->regionCountDayGrowthRatio ? $this->regionCountDayGrowthRatio->toArray($noStream) : $this->regionCountDayGrowthRatio;
        }

        if (null !== $this->regionServerCount) {
            $res['RegionServerCount'] = null !== $this->regionServerCount ? $this->regionServerCount->toArray($noStream) : $this->regionServerCount;
        }

        if (null !== $this->requestBalance) {
            $res['RequestBalance'] = null !== $this->requestBalance ? $this->requestBalance->toArray($noStream) : $this->requestBalance;
        }

        if (null !== $this->storeFileCount) {
            $res['StoreFileCount'] = null !== $this->storeFileCount ? $this->storeFileCount->toArray($noStream) : $this->storeFileCount;
        }

        if (null !== $this->storeFileCountDayGrowthRatio) {
            $res['StoreFileCountDayGrowthRatio'] = null !== $this->storeFileCountDayGrowthRatio ? $this->storeFileCountDayGrowthRatio->toArray($noStream) : $this->storeFileCountDayGrowthRatio;
        }

        if (null !== $this->tableSize) {
            $res['TableSize'] = null !== $this->tableSize ? $this->tableSize->toArray($noStream) : $this->tableSize;
        }

        if (null !== $this->tableSizeDayGrowthRatio) {
            $res['TableSizeDayGrowthRatio'] = null !== $this->tableSizeDayGrowthRatio ? $this->tableSizeDayGrowthRatio->toArray($noStream) : $this->tableSizeDayGrowthRatio;
        }

        if (null !== $this->warmConfigDay) {
            $res['WarmConfigDay'] = null !== $this->warmConfigDay ? $this->warmConfigDay->toArray($noStream) : $this->warmConfigDay;
        }

        if (null !== $this->warmDataSize) {
            $res['WarmDataSize'] = null !== $this->warmDataSize ? $this->warmDataSize->toArray($noStream) : $this->warmDataSize;
        }

        if (null !== $this->writeRequestBalance) {
            $res['WriteRequestBalance'] = null !== $this->writeRequestBalance ? $this->writeRequestBalance->toArray($noStream) : $this->writeRequestBalance;
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
