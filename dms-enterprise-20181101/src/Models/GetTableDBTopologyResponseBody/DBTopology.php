<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyResponseBody\DBTopology\dataSourceList;

class DBTopology extends Model
{
    /**
     * @var dataSourceList[]
     */
    public $dataSourceList;

    /**
     * @var string
     */
    public $tableGuid;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'dataSourceList' => 'DataSourceList',
        'tableGuid' => 'TableGuid',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        if (\is_array($this->dataSourceList)) {
            Model::validateArray($this->dataSourceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceList) {
            if (\is_array($this->dataSourceList)) {
                $res['DataSourceList'] = [];
                $n1 = 0;
                foreach ($this->dataSourceList as $item1) {
                    $res['DataSourceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceList'])) {
            if (!empty($map['DataSourceList'])) {
                $model->dataSourceList = [];
                $n1 = 0;
                foreach ($map['DataSourceList'] as $item1) {
                    $model->dataSourceList[$n1++] = dataSourceList::fromMap($item1);
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
