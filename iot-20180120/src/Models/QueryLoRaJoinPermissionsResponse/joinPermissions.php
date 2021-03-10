<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryLoRaJoinPermissionsResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryLoRaJoinPermissionsResponse\joinPermissions\joinPermission;
use AlibabaCloud\Tea\Model;

class joinPermissions extends Model
{
    /**
     * @var joinPermission[]
     */
    public $joinPermission;
    protected $_name = [
        'joinPermission' => 'JoinPermission',
    ];

    public function validate()
    {
        Model::validateRequired('joinPermission', $this->joinPermission, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->joinPermission) {
            $res['JoinPermission'] = [];
            if (null !== $this->joinPermission && \is_array($this->joinPermission)) {
                $n = 0;
                foreach ($this->joinPermission as $item) {
                    $res['JoinPermission'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return joinPermissions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JoinPermission'])) {
            if (!empty($map['JoinPermission'])) {
                $model->joinPermission = [];
                $n                     = 0;
                foreach ($map['JoinPermission'] as $item) {
                    $model->joinPermission[$n++] = null !== $item ? joinPermission::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
