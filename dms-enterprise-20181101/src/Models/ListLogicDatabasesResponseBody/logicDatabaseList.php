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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicDatabasesResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicDatabasesResponseBody\logicDatabaseList\logicDatabase;
use AlibabaCloud\Tea\Model;

class logicDatabaseList extends Model
{
    /**
     * @var logicDatabase[]
     */
    public $logicDatabase;
    protected $_name = [
        'logicDatabase' => 'LogicDatabase',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->logicDatabase) {
            $res['LogicDatabase'] = [];
            if (null !== $this->logicDatabase && \is_array($this->logicDatabase)) {
                $n = 0;
                foreach ($this->logicDatabase as $item) {
                    $res['LogicDatabase'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logicDatabaseList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogicDatabase'])) {
            if (!empty($map['LogicDatabase'])) {
                $model->logicDatabase = [];
                $n = 0;
                foreach ($map['LogicDatabase'] as $item) {
                    $model->logicDatabase[$n++] = null !== $item ? logicDatabase::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
