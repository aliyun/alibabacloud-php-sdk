<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

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

    public function validate(): void {}

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
                $n = 0;
                foreach ($map['LogicTable'] as $item) {
                    $model->logicTable[$n++] = null !== $item ? logicTable::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
