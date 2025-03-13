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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstanceUserPermissionsResponseBody\userPermissions\userPermission;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstanceUserPermissionsResponseBody\userPermissions\userPermission\permDetails\permDetail;
use AlibabaCloud\Tea\Model;

class permDetails extends Model
{
    /**
     * @var permDetail[]
     */
    public $permDetail;
    protected $_name = [
        'permDetail' => 'PermDetail',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->permDetail) {
            $res['PermDetail'] = [];
            if (null !== $this->permDetail && \is_array($this->permDetail)) {
                $n = 0;
                foreach ($this->permDetail as $item) {
                    $res['PermDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PermDetail'])) {
            if (!empty($map['PermDetail'])) {
                $model->permDetail = [];
                $n = 0;
                foreach ($map['PermDetail'] as $item) {
                    $model->permDetail[$n++] = null !== $item ? permDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
