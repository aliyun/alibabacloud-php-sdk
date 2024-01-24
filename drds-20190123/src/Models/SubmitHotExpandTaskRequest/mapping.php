<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\SubmitHotExpandTaskRequest;

use AlibabaCloud\Tea\Model;

class mapping extends Model
{
    /**
     * @description The shard key used to split the database to which the associated table belongs.
     *
     * @example platform
     *
     * @var string
     */
    public $dbShardColumn;

    /**
     * @description The name of the hot-spot database.
     *
     * @example hot_test_****_****
     *
     * @var string
     */
    public $hotDbName;

    /**
     * @description The name of the hot-spot table. The name must be prefixed with the name of a logical table.
     *
     * @example test_table_*****
     *
     * @var string
     */
    public $hotTableName;

    /**
     * @description The name of the logical table on which you want to perform hot-spot scale-out.
     *
     * @example test_table
     *
     * @var string
     */
    public $logicTable;

    /**
     * @description The value of the shard key used to split a database.
     *
     * @example test
     *
     * @var string
     */
    public $shardDbValue;

    /**
     * @description The value of the shard key used to split a table.
     *
     * @example test
     *
     * @var string
     */
    public $shardTbValue;

    /**
     * @description The shard key used to split an associated table.
     *
     * @example platform
     *
     * @var string
     */
    public $tbShardColumn;
    protected $_name = [
        'dbShardColumn' => 'DbShardColumn',
        'hotDbName'     => 'HotDbName',
        'hotTableName'  => 'HotTableName',
        'logicTable'    => 'LogicTable',
        'shardDbValue'  => 'ShardDbValue',
        'shardTbValue'  => 'ShardTbValue',
        'tbShardColumn' => 'TbShardColumn',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return mapping
     */
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
