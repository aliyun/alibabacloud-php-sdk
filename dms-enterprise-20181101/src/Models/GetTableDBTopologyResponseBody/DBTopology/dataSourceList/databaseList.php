<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyResponseBody\DBTopology\dataSourceList;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyResponseBody\DBTopology\dataSourceList\databaseList\tableList;
use AlibabaCloud\Tea\Model;

class databaseList extends Model
{
    /**
     * @example 489347
     *
     * @var string
     */
    public $dbId;

    /**
     * @example db-test
     *
     * @var string
     */
    public $dbName;

    /**
     * @example MySQL
     *
     * @var string
     */
    public $dbType;

    /**
     * @example pre
     *
     * @var string
     */
    public $envType;

    /**
     * @var tableList[]
     */
    public $tableList;
    protected $_name = [
        'dbId'      => 'DbId',
        'dbName'    => 'DbName',
        'dbType'    => 'DbType',
        'envType'   => 'EnvType',
        'tableList' => 'TableList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->tableList) {
            $res['TableList'] = [];
            if (null !== $this->tableList && \is_array($this->tableList)) {
                $n = 0;
                foreach ($this->tableList as $item) {
                    $res['TableList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databaseList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['TableList'])) {
            if (!empty($map['TableList'])) {
                $model->tableList = [];
                $n                = 0;
                foreach ($map['TableList'] as $item) {
                    $model->tableList[$n++] = null !== $item ? tableList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
