<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetClusterVolumesResponseBody\volumes\volumeInfo;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetClusterVolumesResponseBody\volumes\volumeInfo\roles\roleInfo;
use AlibabaCloud\Tea\Model;

class roles extends Model
{
    /**
     * @var roleInfo[]
     */
    public $roleInfo;
    protected $_name = [
        'roleInfo' => 'RoleInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleInfo) {
            $res['RoleInfo'] = [];
            if (null !== $this->roleInfo && \is_array($this->roleInfo)) {
                $n = 0;
                foreach ($this->roleInfo as $item) {
                    $res['RoleInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleInfo'])) {
            if (!empty($map['RoleInfo'])) {
                $model->roleInfo = [];
                $n               = 0;
                foreach ($map['RoleInfo'] as $item) {
                    $model->roleInfo[$n++] = null !== $item ? roleInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
