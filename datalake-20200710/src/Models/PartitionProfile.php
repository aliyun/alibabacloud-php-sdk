<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class PartitionProfile extends Model
{
    /**
     * @var int
     */
    public $accessNum;

    /**
     * @var int
     */
    public $accessNumMonthly;

    /**
     * @var int
     */
    public $accessNumWeekly;

    /**
     * @var string
     */
    public $archiveStatus;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var int
     */
    public $fileCnt;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var string
     */
    public $lastAccessNumTime;

    /**
     * @var string
     */
    public $lastAccessTime;

    /**
     * @var string
     */
    public $lastModifyTime;

    /**
     * @var string
     */
    public $location;

    /**
     * @var int
     */
    public $objectAccessNum;

    /**
     * @var int
     */
    public $objectAccessNumMonthly;

    /**
     * @var int
     */
    public $objectAccessNumWeekly;

    /**
     * @var int
     */
    public $objectCnt;

    /**
     * @var int
     */
    public $objectSize;

    /**
     * @var string
     */
    public $partitionName;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'accessNum'              => 'AccessNum',
        'accessNumMonthly'       => 'AccessNumMonthly',
        'accessNumWeekly'        => 'AccessNumWeekly',
        'archiveStatus'          => 'ArchiveStatus',
        'createTime'             => 'CreateTime',
        'dataSourceType'         => 'DataSourceType',
        'databaseName'           => 'DatabaseName',
        'fileCnt'                => 'FileCnt',
        'fileSize'               => 'FileSize',
        'lastAccessNumTime'      => 'LastAccessNumTime',
        'lastAccessTime'         => 'LastAccessTime',
        'lastModifyTime'         => 'LastModifyTime',
        'location'               => 'Location',
        'objectAccessNum'        => 'ObjectAccessNum',
        'objectAccessNumMonthly' => 'ObjectAccessNumMonthly',
        'objectAccessNumWeekly'  => 'ObjectAccessNumWeekly',
        'objectCnt'              => 'ObjectCnt',
        'objectSize'             => 'ObjectSize',
        'partitionName'          => 'PartitionName',
        'tableName'              => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessNum) {
            $res['AccessNum'] = $this->accessNum;
        }
        if (null !== $this->accessNumMonthly) {
            $res['AccessNumMonthly'] = $this->accessNumMonthly;
        }
        if (null !== $this->accessNumWeekly) {
            $res['AccessNumWeekly'] = $this->accessNumWeekly;
        }
        if (null !== $this->archiveStatus) {
            $res['ArchiveStatus'] = $this->archiveStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->fileCnt) {
            $res['FileCnt'] = $this->fileCnt;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->lastAccessNumTime) {
            $res['LastAccessNumTime'] = $this->lastAccessNumTime;
        }
        if (null !== $this->lastAccessTime) {
            $res['LastAccessTime'] = $this->lastAccessTime;
        }
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->objectAccessNum) {
            $res['ObjectAccessNum'] = $this->objectAccessNum;
        }
        if (null !== $this->objectAccessNumMonthly) {
            $res['ObjectAccessNumMonthly'] = $this->objectAccessNumMonthly;
        }
        if (null !== $this->objectAccessNumWeekly) {
            $res['ObjectAccessNumWeekly'] = $this->objectAccessNumWeekly;
        }
        if (null !== $this->objectCnt) {
            $res['ObjectCnt'] = $this->objectCnt;
        }
        if (null !== $this->objectSize) {
            $res['ObjectSize'] = $this->objectSize;
        }
        if (null !== $this->partitionName) {
            $res['PartitionName'] = $this->partitionName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PartitionProfile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessNum'])) {
            $model->accessNum = $map['AccessNum'];
        }
        if (isset($map['AccessNumMonthly'])) {
            $model->accessNumMonthly = $map['AccessNumMonthly'];
        }
        if (isset($map['AccessNumWeekly'])) {
            $model->accessNumWeekly = $map['AccessNumWeekly'];
        }
        if (isset($map['ArchiveStatus'])) {
            $model->archiveStatus = $map['ArchiveStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['FileCnt'])) {
            $model->fileCnt = $map['FileCnt'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['LastAccessNumTime'])) {
            $model->lastAccessNumTime = $map['LastAccessNumTime'];
        }
        if (isset($map['LastAccessTime'])) {
            $model->lastAccessTime = $map['LastAccessTime'];
        }
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['ObjectAccessNum'])) {
            $model->objectAccessNum = $map['ObjectAccessNum'];
        }
        if (isset($map['ObjectAccessNumMonthly'])) {
            $model->objectAccessNumMonthly = $map['ObjectAccessNumMonthly'];
        }
        if (isset($map['ObjectAccessNumWeekly'])) {
            $model->objectAccessNumWeekly = $map['ObjectAccessNumWeekly'];
        }
        if (isset($map['ObjectCnt'])) {
            $model->objectCnt = $map['ObjectCnt'];
        }
        if (isset($map['ObjectSize'])) {
            $model->objectSize = $map['ObjectSize'];
        }
        if (isset($map['PartitionName'])) {
            $model->partitionName = $map['PartitionName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
