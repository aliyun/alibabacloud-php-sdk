<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableTopologyResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableTopologyResponseBody\tableTopology\tableTopologyInfoList;
use AlibabaCloud\Tea\Model;

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
        'logic'                 => 'Logic',
        'tableGuid'             => 'TableGuid',
        'tableName'             => 'TableName',
        'tableTopologyInfoList' => 'TableTopologyInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['TableTopologyInfoList'] = [];
            if (null !== $this->tableTopologyInfoList && \is_array($this->tableTopologyInfoList)) {
                $n = 0;
                foreach ($this->tableTopologyInfoList as $item) {
                    $res['TableTopologyInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableTopology
     */
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
                $n                            = 0;
                foreach ($map['TableTopologyInfoList'] as $item) {
                    $model->tableTopologyInfoList[$n++] = null !== $item ? tableTopologyInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
