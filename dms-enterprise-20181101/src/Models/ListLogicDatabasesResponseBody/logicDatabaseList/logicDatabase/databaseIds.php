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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicDatabasesResponseBody\logicDatabaseList\logicDatabase;

use AlibabaCloud\Tea\Model;

class databaseIds extends Model
{
    /**
     * @var int[]
     */
    public $databaseIds;
    protected $_name = [
        'databaseIds' => 'DatabaseIds',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseIds) {
            $res['DatabaseIds'] = $this->databaseIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databaseIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseIds'])) {
            if (!empty($map['DatabaseIds'])) {
                $model->databaseIds = $map['DatabaseIds'];
            }
        }

        return $model;
    }
}
