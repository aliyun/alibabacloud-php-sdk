<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\Table\businessMetadata;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\Table\technicalMetadata;
use AlibabaCloud\Tea\Model;

class Table extends Model
{
    /**
     * @var businessMetadata
     */
    public $businessMetadata;

    /**
     * @example 测试表
     *
     * @var string
     */
    public $comment;

    /**
     * @example 1736852168000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example maxcompute-table:123456::test_project::test_tbl
     *
     * @var string
     */
    public $id;

    /**
     * @example 1736852168000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @example test_tbl
     *
     * @var string
     */
    public $name;

    /**
     * @example maxcompute-project:123456::test_project
     *
     * @var string
     */
    public $parentMetaEntityId;

    /**
     * @var string[]
     */
    public $partitionKeys;

    /**
     * @example TABLE
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessMetadata) {
            $res['BusinessMetadata'] = null !== $this->businessMetadata ? $this->businessMetadata->toMap() : null;
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
            $res['PartitionKeys'] = $this->partitionKeys;
        }
        if (null !== $this->tableType) {
            $res['TableType'] = $this->tableType;
        }
        if (null !== $this->technicalMetadata) {
            $res['TechnicalMetadata'] = null !== $this->technicalMetadata ? $this->technicalMetadata->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Table
     */
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
                $model->partitionKeys = $map['PartitionKeys'];
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
