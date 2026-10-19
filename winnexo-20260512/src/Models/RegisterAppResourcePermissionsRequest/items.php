<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\RegisterAppResourcePermissionsRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\RegisterAppResourcePermissionsRequest\items\grantees;

class items extends Model
{
    /**
     * @var string
     */
    public $expireAt;

    /**
     * @var grantees[]
     */
    public $grantees;

    /**
     * @var string[]
     */
    public $permissions;

    /**
     * @var string
     */
    public $resourceKey;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'expireAt' => 'expireAt',
        'grantees' => 'grantees',
        'permissions' => 'permissions',
        'resourceKey' => 'resourceKey',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
        if (\is_array($this->grantees)) {
            Model::validateArray($this->grantees);
        }
        if (\is_array($this->permissions)) {
            Model::validateArray($this->permissions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expireAt) {
            $res['expireAt'] = $this->expireAt;
        }

        if (null !== $this->grantees) {
            if (\is_array($this->grantees)) {
                $res['grantees'] = [];
                $n1 = 0;
                foreach ($this->grantees as $item1) {
                    $res['grantees'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->permissions) {
            if (\is_array($this->permissions)) {
                $res['permissions'] = [];
                $n1 = 0;
                foreach ($this->permissions as $item1) {
                    $res['permissions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceKey) {
            $res['resourceKey'] = $this->resourceKey;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
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
        if (isset($map['expireAt'])) {
            $model->expireAt = $map['expireAt'];
        }

        if (isset($map['grantees'])) {
            if (!empty($map['grantees'])) {
                $model->grantees = [];
                $n1 = 0;
                foreach ($map['grantees'] as $item1) {
                    $model->grantees[$n1] = grantees::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['permissions'])) {
            if (!empty($map['permissions'])) {
                $model->permissions = [];
                $n1 = 0;
                foreach ($map['permissions'] as $item1) {
                    $model->permissions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['resourceKey'])) {
            $model->resourceKey = $map['resourceKey'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
