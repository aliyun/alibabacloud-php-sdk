<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryLoRaJoinPermissionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryLoRaJoinPermissionsResponseBody\joinPermissions\joinPermission;

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
        if (\is_array($this->joinPermission)) {
            Model::validateArray($this->joinPermission);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->joinPermission) {
            if (\is_array($this->joinPermission)) {
                $res['JoinPermission'] = [];
                $n1 = 0;
                foreach ($this->joinPermission as $item1) {
                    $res['JoinPermission'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['JoinPermission'])) {
            if (!empty($map['JoinPermission'])) {
                $model->joinPermission = [];
                $n1 = 0;
                foreach ($map['JoinPermission'] as $item1) {
                    $model->joinPermission[$n1] = joinPermission::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
