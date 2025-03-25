<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStorageTablesInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class storageTableInfoList extends Model
{
    /**
     * @description The date on which the statistics are collected. This value is not returned.
     *
     * @example 20241205
     *
     * @var string
     */
    public $date;

    /**
     * @description Indicates whether the table is a partitioned table.
     *
     * @example false
     *
     * @var bool
     */
    public $isPartitioned;

    /**
     * @description The time when the table was last accessed. This value is returned when the table is a non-partitioned table.
     *
     * >  The data collection method is upgraded from July 2023. If the data is not accessed after the upgrade or is accessed by using ALGO jobs or the direct read method of Hologres, the last access time cannot be collected.
     *
     * @example 1694589365
     *
     * @var int
     */
    public $lastAccessTime;

    /**
     * @description The storage usage at the long-term storage tier.
     *
     * @example 0
     *
     * @var float
     */
    public $longTermStorage;

    /**
     * @description The number of long-term storage files.
     *
     * @example 0
     *
     * @var int
     */
    public $longTermStorageFileCount;

    /**
     * @description The unit of the storage usage at the long-term storage tier.
     *
     * @example B
     *
     * @var string
     */
    public $longTermStorageUnit;

    /**
     * @description The storage usage at the low-frequency tier.
     *
     * @example 0
     *
     * @var float
     */
    public $lowFreqStorage;

    /**
     * @description The number of low-frequency storage files.
     *
     * @example 0
     *
     * @var int
     */
    public $lowFreqStorageFileCount;

    /**
     * @description The unit of the storage usage at the low-frequency storage tier.
     *
     * @example B
     *
     * @var string
     */
    public $lowFreqStorageUnit;

    /**
     * @description The project name.
     *
     * @example odps_project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The change rate of the total storage usage compared with that of the recent {$recentDays} days.
     *
     * @example 0
     *
     * @var float
     */
    public $rate;

    /**
     * @description The schema name.
     *
     * @example schema
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The storage usage at the standard storage tier.
     *
     * @example 600
     *
     * @var float
     */
    public $standardStorage;

    /**
     * @description The number of standard storage files.
     *
     * @example 2
     *
     * @var int
     */
    public $standardStorageFileCount;

    /**
     * @description The unit of the storage usage at the standard storage tier.
     *
     * @example KB
     *
     * @var string
     */
    public $standardStorageUnit;

    /**
     * @description The table storage type.
     *
     *   standard
     *   lowfrequency
     *   longterm
     *   unknown: This value is returned when the table is a partitioned table. You can call the ListStoragePartitionsInfo operation to query the storage type of each partition.
     *
     * @example standard
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The table name.
     *
     * @example bank_data
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The access frequency.
     *
     * >
     *
     *   Access behaviors include:
     *
     *   The table is used as the input table of an SQL task.
     *   The table is downloaded by Tunnel.
     *   The table is read by calling the Storage API. The partition granularity of the partitioned table is not available. Each time an access operation is performed, the access frequency is incremented by 1.
     *
     *   The data collection method is upgraded from July 2023. If the data is not accessed after the upgrade or is accessed by using ALGO jobs or the direct read method of Hologres, the access frequency cannot be collected.
     *
     * @example 10
     *
     * @var int
     */
    public $totalFrequency;

    /**
     * @description The total amount of accessed data.
     *
     * >  The amount of data that is read by all access behaviors.
     *
     * @example 1
     *
     * @var float
     */
    public $totalInputAmount;

    /**
     * @description The unit of the total amount of accessed data.
     *
     * @example GB
     *
     * @var string
     */
    public $totalInputAmountUnit;

    /**
     * @description The total storage usage. For a partitioned table, this parameter indicates the sum of the storage usage of all partitions. If the storage types of partitions are different, the value is the sum of the storage usage of each storage type.
     *
     * @example 600
     *
     * @var float
     */
    public $totalStorage;

    /**
     * @description The total number of files.
     *
     * @example 2
     *
     * @var int
     */
    public $totalStorageFileCount;

    /**
     * @description The unit of storage usage.
     *
     * @example KB
     *
     * @var string
     */
    public $totalStorageUnit;
    protected $_name = [
        'date' => 'date',
        'isPartitioned' => 'isPartitioned',
        'lastAccessTime' => 'lastAccessTime',
        'longTermStorage' => 'longTermStorage',
        'longTermStorageFileCount' => 'longTermStorageFileCount',
        'longTermStorageUnit' => 'longTermStorageUnit',
        'lowFreqStorage' => 'lowFreqStorage',
        'lowFreqStorageFileCount' => 'lowFreqStorageFileCount',
        'lowFreqStorageUnit' => 'lowFreqStorageUnit',
        'projectName' => 'projectName',
        'rate' => 'rate',
        'schemaName' => 'schemaName',
        'standardStorage' => 'standardStorage',
        'standardStorageFileCount' => 'standardStorageFileCount',
        'standardStorageUnit' => 'standardStorageUnit',
        'storageType' => 'storageType',
        'tableName' => 'tableName',
        'totalFrequency' => 'totalFrequency',
        'totalInputAmount' => 'totalInputAmount',
        'totalInputAmountUnit' => 'totalInputAmountUnit',
        'totalStorage' => 'totalStorage',
        'totalStorageFileCount' => 'totalStorageFileCount',
        'totalStorageUnit' => 'totalStorageUnit',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }
        if (null !== $this->isPartitioned) {
            $res['isPartitioned'] = $this->isPartitioned;
        }
        if (null !== $this->lastAccessTime) {
            $res['lastAccessTime'] = $this->lastAccessTime;
        }
        if (null !== $this->longTermStorage) {
            $res['longTermStorage'] = $this->longTermStorage;
        }
        if (null !== $this->longTermStorageFileCount) {
            $res['longTermStorageFileCount'] = $this->longTermStorageFileCount;
        }
        if (null !== $this->longTermStorageUnit) {
            $res['longTermStorageUnit'] = $this->longTermStorageUnit;
        }
        if (null !== $this->lowFreqStorage) {
            $res['lowFreqStorage'] = $this->lowFreqStorage;
        }
        if (null !== $this->lowFreqStorageFileCount) {
            $res['lowFreqStorageFileCount'] = $this->lowFreqStorageFileCount;
        }
        if (null !== $this->lowFreqStorageUnit) {
            $res['lowFreqStorageUnit'] = $this->lowFreqStorageUnit;
        }
        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }
        if (null !== $this->rate) {
            $res['rate'] = $this->rate;
        }
        if (null !== $this->schemaName) {
            $res['schemaName'] = $this->schemaName;
        }
        if (null !== $this->standardStorage) {
            $res['standardStorage'] = $this->standardStorage;
        }
        if (null !== $this->standardStorageFileCount) {
            $res['standardStorageFileCount'] = $this->standardStorageFileCount;
        }
        if (null !== $this->standardStorageUnit) {
            $res['standardStorageUnit'] = $this->standardStorageUnit;
        }
        if (null !== $this->storageType) {
            $res['storageType'] = $this->storageType;
        }
        if (null !== $this->tableName) {
            $res['tableName'] = $this->tableName;
        }
        if (null !== $this->totalFrequency) {
            $res['totalFrequency'] = $this->totalFrequency;
        }
        if (null !== $this->totalInputAmount) {
            $res['totalInputAmount'] = $this->totalInputAmount;
        }
        if (null !== $this->totalInputAmountUnit) {
            $res['totalInputAmountUnit'] = $this->totalInputAmountUnit;
        }
        if (null !== $this->totalStorage) {
            $res['totalStorage'] = $this->totalStorage;
        }
        if (null !== $this->totalStorageFileCount) {
            $res['totalStorageFileCount'] = $this->totalStorageFileCount;
        }
        if (null !== $this->totalStorageUnit) {
            $res['totalStorageUnit'] = $this->totalStorageUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageTableInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['date'])) {
            $model->date = $map['date'];
        }
        if (isset($map['isPartitioned'])) {
            $model->isPartitioned = $map['isPartitioned'];
        }
        if (isset($map['lastAccessTime'])) {
            $model->lastAccessTime = $map['lastAccessTime'];
        }
        if (isset($map['longTermStorage'])) {
            $model->longTermStorage = $map['longTermStorage'];
        }
        if (isset($map['longTermStorageFileCount'])) {
            $model->longTermStorageFileCount = $map['longTermStorageFileCount'];
        }
        if (isset($map['longTermStorageUnit'])) {
            $model->longTermStorageUnit = $map['longTermStorageUnit'];
        }
        if (isset($map['lowFreqStorage'])) {
            $model->lowFreqStorage = $map['lowFreqStorage'];
        }
        if (isset($map['lowFreqStorageFileCount'])) {
            $model->lowFreqStorageFileCount = $map['lowFreqStorageFileCount'];
        }
        if (isset($map['lowFreqStorageUnit'])) {
            $model->lowFreqStorageUnit = $map['lowFreqStorageUnit'];
        }
        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }
        if (isset($map['rate'])) {
            $model->rate = $map['rate'];
        }
        if (isset($map['schemaName'])) {
            $model->schemaName = $map['schemaName'];
        }
        if (isset($map['standardStorage'])) {
            $model->standardStorage = $map['standardStorage'];
        }
        if (isset($map['standardStorageFileCount'])) {
            $model->standardStorageFileCount = $map['standardStorageFileCount'];
        }
        if (isset($map['standardStorageUnit'])) {
            $model->standardStorageUnit = $map['standardStorageUnit'];
        }
        if (isset($map['storageType'])) {
            $model->storageType = $map['storageType'];
        }
        if (isset($map['tableName'])) {
            $model->tableName = $map['tableName'];
        }
        if (isset($map['totalFrequency'])) {
            $model->totalFrequency = $map['totalFrequency'];
        }
        if (isset($map['totalInputAmount'])) {
            $model->totalInputAmount = $map['totalInputAmount'];
        }
        if (isset($map['totalInputAmountUnit'])) {
            $model->totalInputAmountUnit = $map['totalInputAmountUnit'];
        }
        if (isset($map['totalStorage'])) {
            $model->totalStorage = $map['totalStorage'];
        }
        if (isset($map['totalStorageFileCount'])) {
            $model->totalStorageFileCount = $map['totalStorageFileCount'];
        }
        if (isset($map['totalStorageUnit'])) {
            $model->totalStorageUnit = $map['totalStorageUnit'];
        }

        return $model;
    }
}
