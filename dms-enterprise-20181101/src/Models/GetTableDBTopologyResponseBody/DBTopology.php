<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyResponseBody\DBTopology\dataSourceList;
use AlibabaCloud\Tea\Model;

class DBTopology extends Model
{
    /**
     * @var dataSourceList[]
     */
    public $dataSourceList;

    /**
     * @example IDB_L_9032.db-test.yuyang_test
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @example yuyang_test
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'dataSourceList' => 'DataSourceList',
        'tableGuid'      => 'TableGuid',
        'tableName'      => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceList) {
            $res['DataSourceList'] = [];
            if (null !== $this->dataSourceList && \is_array($this->dataSourceList)) {
                $n = 0;
                foreach ($this->dataSourceList as $item) {
                    $res['DataSourceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBTopology
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceList'])) {
            if (!empty($map['DataSourceList'])) {
                $model->dataSourceList = [];
                $n                     = 0;
                foreach ($map['DataSourceList'] as $item) {
                    $model->dataSourceList[$n++] = null !== $item ? dataSourceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
