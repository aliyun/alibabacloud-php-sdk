<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\Table\businessMetadata;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\Table\technicalMetadata;

class Table extends Model
{
    /**
     * @var businessMetadata
     */
    public $businessMetadata;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parentMetaEntityId;

    /**
     * @var string[]
     */
    public $partitionKeys;

    /**
     * @var string
     */
    public $tableType;

    /**
     * @var technicalMetadata
     */
    public $technicalMetadata;
    protected $_name = [
        'businessMetadata' => 'BusinessMetadata',
        'comment' => 'Comment',
        'createTime' => 'CreateTime',
        'id' => 'Id',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'parentMetaEntityId' => 'ParentMetaEntityId',
        'partitionKeys' => 'PartitionKeys',
        'tableType' => 'TableType',
        'technicalMetadata' => 'TechnicalMetadata',
    ];

    public function validate()
    {
        if (null !== $this->businessMetadata) {
            $this->businessMetadata->validate();
        }
        if (\is_array($this->partitionKeys)) {
            Model::validateArray($this->partitionKeys);
        }
        if (null !== $this->technicalMetadata) {
            $this->technicalMetadata->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessMetadata) {
            $res['BusinessMetadata'] = null !== $this->businessMetadata ? $this->businessMetadata->toArray($noStream) : $this->businessMetadata;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->parentMetaEntityId) {
            $res['ParentMetaEntityId'] = $this->parentMetaEntityId;
        }

        if (null !== $this->partitionKeys) {
            if (\is_array($this->partitionKeys)) {
                $res['PartitionKeys'] = [];
                $n1 = 0;
                foreach ($this->partitionKeys as $item1) {
                    $res['PartitionKeys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tableType) {
            $res['TableType'] = $this->tableType;
        }

        if (null !== $this->technicalMetadata) {
            $res['TechnicalMetadata'] = null !== $this->technicalMetadata ? $this->technicalMetadata->toArray($noStream) : $this->technicalMetadata;
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
        if (isset($map['BusinessMetadata'])) {
            $model->businessMetadata = businessMetadata::fromMap($map['BusinessMetadata']);
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ParentMetaEntityId'])) {
            $model->parentMetaEntityId = $map['ParentMetaEntityId'];
        }

        if (isset($map['PartitionKeys'])) {
            if (!empty($map['PartitionKeys'])) {
                $model->partitionKeys = [];
                $n1 = 0;
                foreach ($map['PartitionKeys'] as $item1) {
                    $model->partitionKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TableType'])) {
            $model->tableType = $map['TableType'];
        }

        if (isset($map['TechnicalMetadata'])) {
            $model->technicalMetadata = technicalMetadata::fromMap($map['TechnicalMetadata']);
        }

        return $model;
    }
}
