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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUsersResponseBody\userList\user;

use AlibabaCloud\Tea\Model;

class roleIdList extends Model
{
    /**
     * @var int[]
     */
    public $roleIds;
    protected $_name = [
        'roleIds' => 'RoleIds',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleIds) {
            $res['RoleIds'] = $this->roleIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roleIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleIds'])) {
            if (!empty($map['RoleIds'])) {
                $model->roleIds = $map['RoleIds'];
            }
        }

        return $model;
    }
}
