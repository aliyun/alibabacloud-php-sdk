<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTablePartitionResponseBody\data;

use AlibabaCloud\Tea\Model;

class dataEntityList extends Model
{
    /**
     * @var string
     */
    public $partitionPath;

    /**
     * @var int
     */
    public $dataSize;

    /**
     * @var string
     */
    public $partitionName;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $recordCount;

    /**
     * @var string
     */
    public $partitionType;

    /**
     * @var string
     */
    public $partitionGuid;

    /**
     * @var string
     */
    public $partitionLocation;

    /**
     * @var string
     */
    public $tableGuid;
    protected $_name = [
        'partitionPath'     => 'PartitionPath',
        'dataSize'          => 'DataSize',
        'partitionName'     => 'PartitionName',
        'comment'           => 'Comment',
        'modifiedTime'      => 'ModifiedTime',
        'createTime'        => 'CreateTime',
        'recordCount'       => 'RecordCount',
        'partitionType'     => 'PartitionType',
        'partitionGuid'     => 'PartitionGuid',
        'partitionLocation' => 'PartitionLocation',
        'tableGuid'         => 'TableGuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->partitionPath) {
            $res['PartitionPath'] = $this->partitionPath;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->partitionName) {
            $res['PartitionName'] = $this->partitionName;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->recordCount) {
            $res['RecordCount'] = $this->recordCount;
        }
        if (null !== $this->partitionType) {
            $res['PartitionType'] = $this->partitionType;
        }
        if (null !== $this->partitionGuid) {
            $res['PartitionGuid'] = $this->partitionGuid;
        }
        if (null !== $this->partitionLocation) {
            $res['PartitionLocation'] = $this->partitionLocation;
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
        if (isset($map['PartitionPath'])) {
            $model->partitionPath = $map['PartitionPath'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['PartitionName'])) {
            $model->partitionName = $map['PartitionName'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['RecordCount'])) {
            $model->recordCount = $map['RecordCount'];
        }
        if (isset($map['PartitionType'])) {
            $model->partitionType = $map['PartitionType'];
        }
        if (isset($map['PartitionGuid'])) {
            $model->partitionGuid = $map['PartitionGuid'];
        }
        if (isset($map['PartitionLocation'])) {
            $model->partitionLocation = $map['PartitionLocation'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }

        return $model;
    }
}
