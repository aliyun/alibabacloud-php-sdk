<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyResponseBody\DBTopology\dataSourceList;
use AlibabaCloud\Tea\Model;

class DBTopology extends Model
{
    /**
     * @var string
     */
    public $tableName;

    /**
     * @var dataSourceList[]
     */
    public $dataSourceList;

    /**
     * @var string
     */
    public $tableGuid;
    protected $_name = [
        'tableName'      => 'TableName',
        'dataSourceList' => 'DataSourceList',
        'tableGuid'      => 'TableGuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
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
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
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

        return $model;
    }
}
