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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetLhSpaceByNameRequest extends Model
{
    /**
     * @description The name of the workspace.
     *
     * This parameter is required.
     *
     * @example test_space
     *
     * @var string
     */
    public $spaceName;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](https://help.aliyun.com/document_detail/198073.html) or [ListUserTenants](https://help.aliyun.com/document_detail/198074.html) operation to obtain the tenant ID.
     *
     * @example 3000
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'spaceName' => 'SpaceName',
        'tid' => 'Tid',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->spaceName) {
            $res['SpaceName'] = $this->spaceName;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLhSpaceByNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpaceName'])) {
            $model->spaceName = $map['SpaceName'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
