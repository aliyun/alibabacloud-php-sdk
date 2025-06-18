<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableTopologyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableTopologyResponseBody\tableTopology\tableTopologyInfoList;

class tableTopology extends Model
{
    /**
     * @var bool
     */
    public $logic;

    /**
     * @var string
     */
    public $tableGuid;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var tableTopologyInfoList[]
     */
    public $tableTopologyInfoList;
    protected $_name = [
        'logic' => 'Logic',
        'tableGuid' => 'TableGuid',
        'tableName' => 'TableName',
        'tableTopologyInfoList' => 'TableTopologyInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->tableTopologyInfoList)) {
            Model::validateArray($this->tableTopologyInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }

        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->tableTopologyInfoList) {
            if (\is_array($this->tableTopologyInfoList)) {
                $res['TableTopologyInfoList'] = [];
                $n1 = 0;
                foreach ($this->tableTopologyInfoList as $item1) {
                    $res['TableTopologyInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }

        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['TableTopologyInfoList'])) {
            if (!empty($map['TableTopologyInfoList'])) {
                $model->tableTopologyInfoList = [];
                $n1 = 0;
                foreach ($map['TableTopologyInfoList'] as $item1) {
                    $model->tableTopologyInfoList[$n1] = tableTopologyInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
