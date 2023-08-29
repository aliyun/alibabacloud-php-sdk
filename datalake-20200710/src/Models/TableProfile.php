<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class TableProfile extends Model
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
     * @var bool
     */
    public $isPartitioned;

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
    public $lastDdlTime;

    /**
     * @var string
     */
    public $lastModifyTime;

    /**
     * @var string
     */
    public $latestAccessNumDate;

    /**
     * @var string
     */
    public $latestDate;

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
     * @var int
     */
    public $partitionCnt;

    /**
     * @var int
     */
    public $recordCnt;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'accessNum'              => 'AccessNum',
        'accessNumMonthly'       => 'AccessNumMonthly',
        'accessNumWeekly'        => 'AccessNumWeekly',
        'createTime'             => 'CreateTime',
        'dataSourceType'         => 'DataSourceType',
        'databaseName'           => 'DatabaseName',
        'fileCnt'                => 'FileCnt',
        'fileSize'               => 'FileSize',
        'isPartitioned'          => 'IsPartitioned',
        'lastAccessNumTime'      => 'LastAccessNumTime',
        'lastAccessTime'         => 'LastAccessTime',
        'lastDdlTime'            => 'LastDdlTime',
        'lastModifyTime'         => 'LastModifyTime',
        'latestAccessNumDate'    => 'LatestAccessNumDate',
        'latestDate'             => 'LatestDate',
        'location'               => 'Location',
        'objectAccessNum'        => 'ObjectAccessNum',
        'objectAccessNumMonthly' => 'ObjectAccessNumMonthly',
        'objectAccessNumWeekly'  => 'ObjectAccessNumWeekly',
        'objectCnt'              => 'ObjectCnt',
        'objectSize'             => 'ObjectSize',
        'partitionCnt'           => 'PartitionCnt',
        'recordCnt'              => 'RecordCnt',
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
        if (null !== $this->isPartitioned) {
            $res['IsPartitioned'] = $this->isPartitioned;
        }
        if (null !== $this->lastAccessNumTime) {
            $res['LastAccessNumTime'] = $this->lastAccessNumTime;
        }
        if (null !== $this->lastAccessTime) {
            $res['LastAccessTime'] = $this->lastAccessTime;
        }
        if (null !== $this->lastDdlTime) {
            $res['LastDdlTime'] = $this->lastDdlTime;
        }
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->latestAccessNumDate) {
            $res['LatestAccessNumDate'] = $this->latestAccessNumDate;
        }
        if (null !== $this->latestDate) {
            $res['LatestDate'] = $this->latestDate;
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
        if (null !== $this->partitionCnt) {
            $res['PartitionCnt'] = $this->partitionCnt;
        }
        if (null !== $this->recordCnt) {
            $res['RecordCnt'] = $this->recordCnt;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TableProfile
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
        if (isset($map['IsPartitioned'])) {
            $model->isPartitioned = $map['IsPartitioned'];
        }
        if (isset($map['LastAccessNumTime'])) {
            $model->lastAccessNumTime = $map['LastAccessNumTime'];
        }
        if (isset($map['LastAccessTime'])) {
            $model->lastAccessTime = $map['LastAccessTime'];
        }
        if (isset($map['LastDdlTime'])) {
            $model->lastDdlTime = $map['LastDdlTime'];
        }
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }
        if (isset($map['LatestAccessNumDate'])) {
            $model->latestAccessNumDate = $map['LatestAccessNumDate'];
        }
        if (isset($map['LatestDate'])) {
            $model->latestDate = $map['LatestDate'];
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
        if (isset($map['PartitionCnt'])) {
            $model->partitionCnt = $map['PartitionCnt'];
        }
        if (isset($map['RecordCnt'])) {
            $model->recordCnt = $map['RecordCnt'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
