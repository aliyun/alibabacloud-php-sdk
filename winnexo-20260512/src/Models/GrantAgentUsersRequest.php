<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class GrantAgentUsersRequest extends Model
{
    /**
     * @var int
     */
    public $expireDate;

    /**
     * @var string
     */
    public $operatingObjectName;

    /**
     * @var string[]
     */
    public $permissions;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string[]
     */
    public $userGroupIds;

    /**
     * @var string[]
     */
    public $userIds;
    protected $_name = [
        'expireDate' => 'expireDate',
        'operatingObjectName' => 'operatingObjectName',
        'permissions' => 'permissions',
        'tenantId' => 'tenantId',
        'userGroupIds' => 'userGroupIds',
        'userIds' => 'userIds',
    ];

    public function validate()
    {
        if (\is_array($this->permissions)) {
            Model::validateArray($this->permissions);
        }
        if (\is_array($this->userGroupIds)) {
            Model::validateArray($this->userGroupIds);
        }
        if (\is_array($this->userIds)) {
            Model::validateArray($this->userIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expireDate) {
            $res['expireDate'] = $this->expireDate;
        }

        if (null !== $this->operatingObjectName) {
            $res['operatingObjectName'] = $this->operatingObjectName;
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

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->userGroupIds) {
            if (\is_array($this->userGroupIds)) {
                $res['userGroupIds'] = [];
                $n1 = 0;
                foreach ($this->userGroupIds as $item1) {
                    $res['userGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userIds) {
            if (\is_array($this->userIds)) {
                $res['userIds'] = [];
                $n1 = 0;
                foreach ($this->userIds as $item1) {
                    $res['userIds'][$n1] = $item1;
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
        if (isset($map['expireDate'])) {
            $model->expireDate = $map['expireDate'];
        }

        if (isset($map['operatingObjectName'])) {
            $model->operatingObjectName = $map['operatingObjectName'];
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

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['userGroupIds'])) {
            if (!empty($map['userGroupIds'])) {
                $model->userGroupIds = [];
                $n1 = 0;
                foreach ($map['userGroupIds'] as $item1) {
                    $model->userGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['userIds'])) {
            if (!empty($map['userIds'])) {
                $model->userIds = [];
                $n1 = 0;
                foreach ($map['userIds'] as $item1) {
                    $model->userIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
