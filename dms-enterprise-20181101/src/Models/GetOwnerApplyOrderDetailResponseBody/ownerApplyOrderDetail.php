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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOwnerApplyOrderDetailResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOwnerApplyOrderDetailResponseBody\ownerApplyOrderDetail\resources;
use AlibabaCloud\Tea\Model;

class ownerApplyOrderDetail extends Model
{
    /**
     * @description The type of the submitted ticket. Valid values:
     *
     *   **INSTANCE**: the ticket that applies for the permissions to be an instance owner
     *   **DB**: the ticket that applies for the permissions to be a database owner
     *   **TABLE**: the ticket that applies for the permissions to be a table owner
     *
     * @example DB
     *
     * @var string
     */
    public $applyType;

    /**
     * @description The details of the requested resource.
     *
     * @var resources[]
     */
    public $resources;
    protected $_name = [
        'applyType' => 'ApplyType',
        'resources' => 'Resources',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyType) {
            $res['ApplyType'] = $this->applyType;
        }
        if (null !== $this->resources) {
            $res['Resources'] = [];
            if (null !== $this->resources && \is_array($this->resources)) {
                $n = 0;
                foreach ($this->resources as $item) {
                    $res['Resources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ownerApplyOrderDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyType'])) {
            $model->applyType = $map['ApplyType'];
        }
        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n = 0;
                foreach ($map['Resources'] as $item) {
                    $model->resources[$n++] = null !== $item ? resources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
