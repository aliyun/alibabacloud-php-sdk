<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class Partition extends Model
{
    /**
     * @example 1700192563000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 4096
     *
     * @var int
     */
    public $dataSize;

    /**
     * @example 1700192563000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @example ds=20250101
     *
     * @var string
     */
    public $name;

    /**
     * @example 1000000
     *
     * @var int
     */
    public $recordCount;

    /**
     * @example maxcompute-table:accountId::project::table
     *
     * @var string
     */
    public $tableId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'dataSize' => 'DataSize',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'recordCount' => 'RecordCount',
        'tableId' => 'TableId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->recordCount) {
            $res['RecordCount'] = $this->recordCount;
        }
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Partition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RecordCount'])) {
            $model->recordCount = $map['RecordCount'];
        }
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }

        return $model;
    }
}
