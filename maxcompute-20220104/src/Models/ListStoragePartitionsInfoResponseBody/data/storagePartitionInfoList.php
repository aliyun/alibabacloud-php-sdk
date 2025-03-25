<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStoragePartitionsInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class storagePartitionInfoList extends Model
{
    /**
     * @description The number of files.
     *
     * @example 2
     *
     * @var int
     */
    public $fileCount;

    /**
     * @description The storage size.
     *
     * @example 1
     *
     * @var float
     */
    public $fileSize;

    /**
     * @description The unit of the storage size.
     *
     * @example GB
     *
     * @var string
     */
    public $fileSizeUnit;

    /**
     * @description Indicates whether the table is a partitioned table. This operation returns the partition information. You do not need to take note of this parameter.
     *
     * @example false
     *
     * @var bool
     */
    public $isPartitioned;

    /**
     * @description The time when the partition data was last accessed.
     *
     * >  The data collection method is upgraded from July 2023. If the data is not accessed after the upgrade or is accessed by using ALGO jobs or the direct read method of Hologres, the last access time cannot be collected.
     *
     * @example 1694589365
     *
     * @var int
     */
    public $lastAccessTime;

    /**
     * @description The partition name.
     *
     * @example ds=20241201
     *
     * @var string
     */
    public $partition;

    /**
     * @description The project name.
     *
     * @example odps_project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The change rate of the total storage usage compared with that of the recent {$recentDays} days. No value is returned.
     *
     * @example 1%
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
     * @description The storage type.
     *
     *   standard
     *   lowfrequency
     *   longterm
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
     * @description The type.
     *
     * @example PARTITION
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'fileCount' => 'fileCount',
        'fileSize' => 'fileSize',
        'fileSizeUnit' => 'fileSizeUnit',
        'isPartitioned' => 'isPartitioned',
        'lastAccessTime' => 'lastAccessTime',
        'partition' => 'partition',
        'projectName' => 'projectName',
        'rate' => 'rate',
        'schemaName' => 'schemaName',
        'storageType' => 'storageType',
        'tableName' => 'tableName',
        'totalFrequency' => 'totalFrequency',
        'totalInputAmount' => 'totalInputAmount',
        'totalInputAmountUnit' => 'totalInputAmountUnit',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileCount) {
            $res['fileCount'] = $this->fileCount;
        }
        if (null !== $this->fileSize) {
            $res['fileSize'] = $this->fileSize;
        }
        if (null !== $this->fileSizeUnit) {
            $res['fileSizeUnit'] = $this->fileSizeUnit;
        }
        if (null !== $this->isPartitioned) {
            $res['isPartitioned'] = $this->isPartitioned;
        }
        if (null !== $this->lastAccessTime) {
            $res['lastAccessTime'] = $this->lastAccessTime;
        }
        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
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
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storagePartitionInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fileCount'])) {
            $model->fileCount = $map['fileCount'];
        }
        if (isset($map['fileSize'])) {
            $model->fileSize = $map['fileSize'];
        }
        if (isset($map['fileSizeUnit'])) {
            $model->fileSizeUnit = $map['fileSizeUnit'];
        }
        if (isset($map['isPartitioned'])) {
            $model->isPartitioned = $map['isPartitioned'];
        }
        if (isset($map['lastAccessTime'])) {
            $model->lastAccessTime = $map['lastAccessTime'];
        }
        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
