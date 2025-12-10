<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncUploadVideoRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncUploadVideoRequest\videoRoles\roleUrls;

class videoRoles extends Model
{
    /**
     * @var string
     */
    public $roleInfo;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var roleUrls[]
     */
    public $roleUrls;
    protected $_name = [
        'roleInfo' => 'RoleInfo',
        'roleName' => 'RoleName',
        'roleUrls' => 'RoleUrls',
    ];

    public function validate()
    {
        if (\is_array($this->roleUrls)) {
            Model::validateArray($this->roleUrls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->roleInfo) {
            $res['RoleInfo'] = $this->roleInfo;
        }

        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        if (null !== $this->roleUrls) {
            if (\is_array($this->roleUrls)) {
                $res['RoleUrls'] = [];
                $n1 = 0;
                foreach ($this->roleUrls as $item1) {
                    $res['RoleUrls'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RoleInfo'])) {
            $model->roleInfo = $map['RoleInfo'];
        }

        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        if (isset($map['RoleUrls'])) {
            if (!empty($map['RoleUrls'])) {
                $model->roleUrls = [];
                $n1 = 0;
                foreach ($map['RoleUrls'] as $item1) {
                    $model->roleUrls[$n1] = roleUrls::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
