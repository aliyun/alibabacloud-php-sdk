<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class PartitionProfile extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $accessNum;

    /**
     * @example 0
     *
     * @var int
     */
    public $accessNumMonthly;

    /**
     * @example 0
     *
     * @var int
     */
    public $accessNumWeekly;

    /**
     * @example STANDARD
     *
     * @var string
     */
    public $archiveStatus;

    /**
     * @example 2023-08-16 18:02:22
     *
     * @var string
     */
    public $createTime;

    /**
     * @example OSS_HDFS
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @example test_db
     *
     * @var string
     */
    public $databaseName;

    /**
     * @example 1
     *
     * @var int
     */
    public $fileCnt;

    /**
     * @example 13
     *
     * @var int
     */
    public $fileSize;

    /**
     * @var string
     */
    public $lastAccessNumTime;

    /**
     * @example 2023-08-22 12:14:42
     *
     * @var string
     */
    public $lastAccessTime;

    /**
     * @example 2023-08-16 18:02:25
     *
     * @var string
     */
    public $lastModifyTime;

    /**
     * @example oss://mybucket.cn-hangzhou.oss-dls.aliyuncs.com/test_tb/test_tbl/year=2023/month=1
     *
     * @var string
     */
    public $location;

    /**
     * @example 0
     *
     * @var int
     */
    public $objectAccessNum;

    /**
     * @example 4
     *
     * @var int
     */
    public $objectAccessNumMonthly;

    /**
     * @example 4
     *
     * @var int
     */
    public $objectAccessNumWeekly;

    /**
     * @example 1
     *
     * @var int
     */
    public $objectCnt;

    /**
     * @example 13
     *
     * @var int
     */
    public $objectSize;

    /**
     * @example year=2023/month=1
     *
     * @var string
     */
    public $partitionName;

    /**
     * @example test_tbl
     *
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
