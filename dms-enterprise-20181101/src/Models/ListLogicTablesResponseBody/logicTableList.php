<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTablesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTablesResponseBody\logicTableList\logicTable;

class logicTableList extends Model
{
    /**
     * @var logicTable[]
     */
    public $logicTable;
    protected $_name = [
        'logicTable' => 'LogicTable',
    ];

    public function validate()
    {
        if (\is_array($this->logicTable)) {
            Model::validateArray($this->logicTable);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logicTable) {
            if (\is_array($this->logicTable)) {
                $res['LogicTable'] = [];
                $n1 = 0;
                foreach ($this->logicTable as $item1) {
                    $res['LogicTable'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LogicTable'])) {
            if (!empty($map['LogicTable'])) {
                $model->logicTable = [];
                $n1 = 0;
                foreach ($map['LogicTable'] as $item1) {
                    $model->logicTable[$n1++] = logicTable::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
