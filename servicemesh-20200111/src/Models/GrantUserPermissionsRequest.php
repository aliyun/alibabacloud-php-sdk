<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

class GrantUserPermissionsRequest extends Model
{
    /**
     * @var string
     */
    public $permissions;

    /**
     * @var string
     */
    public $subAccountUserId;

    /**
     * @var string[]
     */
    public $subAccountUserIds;
    protected $_name = [
        'permissions' => 'Permissions',
        'subAccountUserId' => 'SubAccountUserId',
        'subAccountUserIds' => 'SubAccountUserIds',
    ];

    public function validate()
    {
        if (\is_array($this->subAccountUserIds)) {
            Model::validateArray($this->subAccountUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->permissions) {
            $res['Permissions'] = $this->permissions;
        }

        if (null !== $this->subAccountUserId) {
            $res['SubAccountUserId'] = $this->subAccountUserId;
        }

        if (null !== $this->subAccountUserIds) {
            if (\is_array($this->subAccountUserIds)) {
                $res['SubAccountUserIds'] = [];
                $n1 = 0;
                foreach ($this->subAccountUserIds as $item1) {
                    $res['SubAccountUserIds'][$n1] = $item1;
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
        if (isset($map['Permissions'])) {
            $model->permissions = $map['Permissions'];
        }

        if (isset($map['SubAccountUserId'])) {
            $model->subAccountUserId = $map['SubAccountUserId'];
        }

        if (isset($map['SubAccountUserIds'])) {
            if (!empty($map['SubAccountUserIds'])) {
                $model->subAccountUserIds = [];
                $n1 = 0;
                foreach ($map['SubAccountUserIds'] as $item1) {
                    $model->subAccountUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
