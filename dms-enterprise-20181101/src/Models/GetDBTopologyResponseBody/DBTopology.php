<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDBTopologyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDBTopologyResponseBody\DBTopology\DBTopologyInfoList;

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
        'alias' => 'Alias',
        'DBTopologyInfoList' => 'DBTopologyInfoList',
        'dbType' => 'DbType',
        'envType' => 'EnvType',
        'logicDbId' => 'LogicDbId',
        'logicDbName' => 'LogicDbName',
        'searchName' => 'SearchName',
    ];

    public function validate()
    {
        if (\is_array($this->DBTopologyInfoList)) {
            Model::validateArray($this->DBTopologyInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->DBTopologyInfoList) {
            if (\is_array($this->DBTopologyInfoList)) {
                $res['DBTopologyInfoList'] = [];
                $n1 = 0;
                foreach ($this->DBTopologyInfoList as $item1) {
                    $res['DBTopologyInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        if (isset($map['DBTopologyInfoList'])) {
            if (!empty($map['DBTopologyInfoList'])) {
                $model->DBTopologyInfoList = [];
                $n1 = 0;
                foreach ($map['DBTopologyInfoList'] as $item1) {
                    $model->DBTopologyInfoList[$n1] = DBTopologyInfoList::fromMap($item1);
                    ++$n1;
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
