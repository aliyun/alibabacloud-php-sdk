<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyResponseBody\DBTopology\dataSourceList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyResponseBody\DBTopology\dataSourceList\databaseList\tableList;

class databaseList extends Model
{
    /**
     * @var string
     */
    public $dbId;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var tableList[]
     */
    public $tableList;
    protected $_name = [
        'dbId' => 'DbId',
        'dbName' => 'DbName',
        'dbType' => 'DbType',
        'envType' => 'EnvType',
        'tableList' => 'TableList',
    ];

    public function validate()
    {
        if (\is_array($this->tableList)) {
            Model::validateArray($this->tableList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tableList)) {
                $res['TableList'] = [];
                $n1 = 0;
                foreach ($this->tableList as $item1) {
                    $res['TableList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1 = 0;
                foreach ($map['TableList'] as $item1) {
                    $model->tableList[$n1++] = tableList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
