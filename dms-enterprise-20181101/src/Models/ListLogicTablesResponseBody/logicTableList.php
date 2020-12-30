<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTablesResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTablesResponseBody\logicTableList\logicTable;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logicTable) {
            $res['LogicTable'] = [];
            if (null !== $this->logicTable && \is_array($this->logicTable)) {
                $n = 0;
                foreach ($this->logicTable as $item) {
                    $res['LogicTable'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logicTableList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogicTable'])) {
            if (!empty($map['LogicTable'])) {
                $model->logicTable = [];
                $n                 = 0;
                foreach ($map['LogicTable'] as $item) {
                    $model->logicTable[$n++] = null !== $item ? logicTable::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
