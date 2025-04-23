<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetClusterVolumesResponseBody\volumes\volumeInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetClusterVolumesResponseBody\volumes\volumeInfo\roles\roleInfo;

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
        if (\is_array($this->roleInfo)) {
            Model::validateArray($this->roleInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->roleInfo) {
            if (\is_array($this->roleInfo)) {
                $res['RoleInfo'] = [];
                $n1 = 0;
                foreach ($this->roleInfo as $item1) {
                    $res['RoleInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleInfo'])) {
            if (!empty($map['RoleInfo'])) {
                $model->roleInfo = [];
                $n1 = 0;
                foreach ($map['RoleInfo'] as $item1) {
                    $model->roleInfo[$n1++] = roleInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
