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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseResponseBody\database;

use AlibabaCloud\Tea\Model;

class ownerNameList extends Model
{
    /**
     * @var string[]
     */
    public $ownerNames;
    protected $_name = [
        'ownerNames' => 'OwnerNames',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerNames) {
            $res['OwnerNames'] = $this->ownerNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ownerNameList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerNames'])) {
            if (!empty($map['OwnerNames'])) {
                $model->ownerNames = $map['OwnerNames'];
            }
        }

        return $model;
    }
}
