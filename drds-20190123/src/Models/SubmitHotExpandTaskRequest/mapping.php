<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\SubmitHotExpandTaskRequest;

use AlibabaCloud\Dara\Model;

class mapping extends Model
{
    /**
     * @var string
     */
    public $dbShardColumn;

    /**
     * @var string
     */
    public $hotDbName;

    /**
     * @var string
     */
    public $hotTableName;

    /**
     * @var string
     */
    public $logicTable;

    /**
     * @var string
     */
    public $shardDbValue;

    /**
     * @var string
     */
    public $shardTbValue;

    /**
     * @var string
     */
    public $tbShardColumn;
    protected $_name = [
        'dbShardColumn' => 'DbShardColumn',
        'hotDbName' => 'HotDbName',
        'hotTableName' => 'HotTableName',
        'logicTable' => 'LogicTable',
        'shardDbValue' => 'ShardDbValue',
        'shardTbValue' => 'ShardTbValue',
        'tbShardColumn' => 'TbShardColumn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbShardColumn) {
            $res['DbShardColumn'] = $this->dbShardColumn;
        }

        if (null !== $this->hotDbName) {
            $res['HotDbName'] = $this->hotDbName;
        }

        if (null !== $this->hotTableName) {
            $res['HotTableName'] = $this->hotTableName;
        }

        if (null !== $this->logicTable) {
            $res['LogicTable'] = $this->logicTable;
        }

        if (null !== $this->shardDbValue) {
            $res['ShardDbValue'] = $this->shardDbValue;
        }

        if (null !== $this->shardTbValue) {
            $res['ShardTbValue'] = $this->shardTbValue;
        }

        if (null !== $this->tbShardColumn) {
            $res['TbShardColumn'] = $this->tbShardColumn;
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
        if (isset($map['DbShardColumn'])) {
            $model->dbShardColumn = $map['DbShardColumn'];
        }

        if (isset($map['HotDbName'])) {
            $model->hotDbName = $map['HotDbName'];
        }

        if (isset($map['HotTableName'])) {
            $model->hotTableName = $map['HotTableName'];
        }

        if (isset($map['LogicTable'])) {
            $model->logicTable = $map['LogicTable'];
        }

        if (isset($map['ShardDbValue'])) {
            $model->shardDbValue = $map['ShardDbValue'];
        }

        if (isset($map['ShardTbValue'])) {
            $model->shardTbValue = $map['ShardTbValue'];
        }

        if (isset($map['TbShardColumn'])) {
            $model->tbShardColumn = $map['TbShardColumn'];
        }

        return $model;
    }
}
