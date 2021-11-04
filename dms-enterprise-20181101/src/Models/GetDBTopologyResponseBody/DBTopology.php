<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDBTopologyResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDBTopologyResponseBody\DBTopology\DBTopologyInfoList;
use AlibabaCloud\Tea\Model;

class DBTopology extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var DBTopologyInfoList[]
     */
    public $DBTopologyInfoList;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var int
     */
    public $logicDbId;

    /**
     * @var string
     */
    public $logicDbName;

    /**
     * @var string
     */
    public $searchName;
    protected $_name = [
        'alias'              => 'Alias',
        'DBTopologyInfoList' => 'DBTopologyInfoList',
        'dbType'             => 'DbType',
        'envType'            => 'EnvType',
        'logicDbId'          => 'LogicDbId',
        'logicDbName'        => 'LogicDbName',
        'searchName'         => 'SearchName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->DBTopologyInfoList) {
            $res['DBTopologyInfoList'] = [];
            if (null !== $this->DBTopologyInfoList && \is_array($this->DBTopologyInfoList)) {
                $n = 0;
                foreach ($this->DBTopologyInfoList as $item) {
                    $res['DBTopologyInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->logicDbId) {
            $res['LogicDbId'] = $this->logicDbId;
        }
        if (null !== $this->logicDbName) {
            $res['LogicDbName'] = $this->logicDbName;
        }
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
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
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['DBTopologyInfoList'])) {
            if (!empty($map['DBTopologyInfoList'])) {
                $model->DBTopologyInfoList = [];
                $n                         = 0;
                foreach ($map['DBTopologyInfoList'] as $item) {
                    $model->DBTopologyInfoList[$n++] = null !== $item ? DBTopologyInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['LogicDbId'])) {
            $model->logicDbId = $map['LogicDbId'];
        }
        if (isset($map['LogicDbName'])) {
            $model->logicDbName = $map['LogicDbName'];
        }
        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }

        return $model;
    }
}
