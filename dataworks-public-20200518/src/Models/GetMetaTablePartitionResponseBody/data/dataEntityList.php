<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTablePartitionResponseBody\data;

use AlibabaCloud\Tea\Model;

class dataEntityList extends Model
{
    /**
     * @description The comment.
     *
     * @var string
     */
    public $comment;

    /**
     * @description The time when the partition was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1590032868000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The size of the partition. Unit: bytes.
     *
     * @example 19
     *
     * @var int
     */
    public $dataSize;

    /**
     * @description The time when the partition was modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1590032868000
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @description The GUID of the partition.
     *
     * @example odps.engine_name.table_name.pt=20170614
     *
     * @var string
     */
    public $partitionGuid;

    /**
     * @description The location of the Hive partition.
     *
     * @example abc
     *
     * @var string
     */
    public $partitionLocation;

    /**
     * @description The name of the partition.
     *
     * @example pt=20170614
     *
     * @var string
     */
    public $partitionName;

    /**
     * @description The path of the partition.
     *
     * @example abc
     *
     * @var string
     */
    public $partitionPath;

    /**
     * @description The type of the partition.
     *
     * @example abc
     *
     * @var string
     */
    public $partitionType;

    /**
     * @description The number of entries in the partition.
     *
     * @example 233
     *
     * @var int
     */
    public $recordCount;

    /**
     * @description The GUID of the metatable.
     *
     * @example odps.engine_name.table_name
     *
     * @var string
     */
    public $tableGuid;
    protected $_name = [
        'comment'           => 'Comment',
        'createTime'        => 'CreateTime',
        'dataSize'          => 'DataSize',
        'modifiedTime'      => 'ModifiedTime',
        'partitionGuid'     => 'PartitionGuid',
        'partitionLocation' => 'PartitionLocation',
        'partitionName'     => 'PartitionName',
        'partitionPath'     => 'PartitionPath',
        'partitionType'     => 'PartitionType',
        'recordCount'       => 'RecordCount',
        'tableGuid'         => 'TableGuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->partitionGuid) {
            $res['PartitionGuid'] = $this->partitionGuid;
        }
        if (null !== $this->partitionLocation) {
            $res['PartitionLocation'] = $this->partitionLocation;
        }
        if (null !== $this->partitionName) {
            $res['PartitionName'] = $this->partitionName;
        }
        if (null !== $this->partitionPath) {
            $res['PartitionPath'] = $this->partitionPath;
        }
        if (null !== $this->partitionType) {
            $res['PartitionType'] = $this->partitionType;
        }
        if (null !== $this->recordCount) {
            $res['RecordCount'] = $this->recordCount;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataEntityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['PartitionGuid'])) {
            $model->partitionGuid = $map['PartitionGuid'];
        }
        if (isset($map['PartitionLocation'])) {
            $model->partitionLocation = $map['PartitionLocation'];
        }
        if (isset($map['PartitionName'])) {
            $model->partitionName = $map['PartitionName'];
        }
        if (isset($map['PartitionPath'])) {
            $model->partitionPath = $map['PartitionPath'];
        }
        if (isset($map['PartitionType'])) {
            $model->partitionType = $map['PartitionType'];
        }
        if (isset($map['RecordCount'])) {
            $model->recordCount = $map['RecordCount'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }

        return $model;
    }
}
