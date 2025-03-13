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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserResponseBody\user;

use AlibabaCloud\Tea\Model;

class roleNameList extends Model
{
    /**
     * @var string[]
     */
    public $roleNames;
    protected $_name = [
        'roleNames' => 'RoleNames',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleNames) {
            $res['RoleNames'] = $this->roleNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roleNameList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleNames'])) {
            if (!empty($map['RoleNames'])) {
                $model->roleNames = $map['RoleNames'];
            }
        }

        return $model;
    }
}
