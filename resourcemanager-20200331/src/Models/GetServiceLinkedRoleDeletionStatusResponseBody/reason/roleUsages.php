<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetServiceLinkedRoleDeletionStatusResponseBody\reason;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetServiceLinkedRoleDeletionStatusResponseBody\reason\roleUsages\roleUsage;
use AlibabaCloud\Tea\Model;

class roleUsages extends Model
{
    /**
     * @var roleUsage[]
     */
    public $roleUsage;
    protected $_name = [
        'roleUsage' => 'RoleUsage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleUsage) {
            $res['RoleUsage'] = [];
            if (null !== $this->roleUsage && \is_array($this->roleUsage)) {
                $n = 0;
                foreach ($this->roleUsage as $item) {
                    $res['RoleUsage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roleUsages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleUsage'])) {
            if (!empty($map['RoleUsage'])) {
                $model->roleUsage = [];
                $n                = 0;
                foreach ($map['RoleUsage'] as $item) {
                    $model->roleUsage[$n++] = null !== $item ? roleUsage::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
