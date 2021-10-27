<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeSrcRdsListRequest;

use AlibabaCloud\Tea\Model;

class partitionMapping extends Model
{
    /**
     * @var string
     */
    public $dbShardValue;

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
    public $tbShardValue;
    protected $_name = [
        'dbShardValue' => 'DbShardValue',
        'hotDbName'    => 'HotDbName',
        'hotTableName' => 'HotTableName',
        'logicTable'   => 'LogicTable',
        'tbShardValue' => 'TbShardValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbShardValue) {
            $res['DbShardValue'] = $this->dbShardValue;
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
        if (null !== $this->tbShardValue) {
            $res['TbShardValue'] = $this->tbShardValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return partitionMapping
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbShardValue'])) {
            $model->dbShardValue = $map['DbShardValue'];
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
        if (isset($map['TbShardValue'])) {
            $model->tbShardValue = $map['TbShardValue'];
        }

        return $model;
    }
}
