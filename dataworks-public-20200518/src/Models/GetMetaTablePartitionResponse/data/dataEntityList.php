<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTablePartitionResponse\data;

use AlibabaCloud\Tea\Model;

class dataEntityList extends Model
{
    /**
     * @var string
     */
    public $partitionGuid;

    /**
     * @var string
     */
    public $partitionName;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $dataSize;

    /**
     * @var int
     */
    public $recordCount;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $tableGuid;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $partitionType;

    /**
     * @var string
     */
    public $partitionPath;

    /**
     * @var string
     */
    public $partitionLocation;
    protected $_name = [
        'partitionGuid'     => 'PartitionGuid',
        'partitionName'     => 'PartitionName',
        'createTime'        => 'CreateTime',
        'dataSize'          => 'DataSize',
        'recordCount'       => 'RecordCount',
        'modifiedTime'      => 'ModifiedTime',
        'tableGuid'         => 'TableGuid',
        'comment'           => 'Comment',
        'partitionType'     => 'PartitionType',
        'partitionPath'     => 'PartitionPath',
        'partitionLocation' => 'PartitionLocation',
    ];

    public function validate()
    {
        Model::validateRequired('partitionGuid', $this->partitionGuid, true);
        Model::validateRequired('partitionName', $this->partitionName, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('dataSize', $this->dataSize, true);
        Model::validateRequired('recordCount', $this->recordCount, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('tableGuid', $this->tableGuid, true);
        Model::validateRequired('comment', $this->comment, true);
        Model::validateRequired('partitionType', $this->partitionType, true);
        Model::validateRequired('partitionPath', $this->partitionPath, true);
        Model::validateRequired('partitionLocation', $this->partitionLocation, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->partitionGuid) {
            $res['PartitionGuid'] = $this->partitionGuid;
        }
        if (null !== $this->partitionName) {
            $res['PartitionName'] = $this->partitionName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->recordCount) {
            $res['RecordCount'] = $this->recordCount;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->partitionType) {
            $res['PartitionType'] = $this->partitionType;
        }
        if (null !== $this->partitionPath) {
            $res['PartitionPath'] = $this->partitionPath;
        }
        if (null !== $this->partitionLocation) {
            $res['PartitionLocation'] = $this->partitionLocation;
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
        if (isset($map['PartitionGuid'])) {
            $model->partitionGuid = $map['PartitionGuid'];
        }
        if (isset($map['PartitionName'])) {
            $model->partitionName = $map['PartitionName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['RecordCount'])) {
            $model->recordCount = $map['RecordCount'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['PartitionType'])) {
            $model->partitionType = $map['PartitionType'];
        }
        if (isset($map['PartitionPath'])) {
            $model->partitionPath = $map['PartitionPath'];
        }
        if (isset($map['PartitionLocation'])) {
            $model->partitionLocation = $map['PartitionLocation'];
        }

        return $model;
    }
}
