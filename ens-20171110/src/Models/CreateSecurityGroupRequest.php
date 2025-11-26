<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateSecurityGroupRequest\permissions;

class CreateSecurityGroupRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var permissions[]
     */
    public $permissions;

    /**
     * @var string
     */
    public $securityGroupName;
    protected $_name = [
        'description' => 'Description',
        'permissions' => 'Permissions',
        'securityGroupName' => 'SecurityGroupName',
    ];

    public function validate()
    {
        if (\is_array($this->permissions)) {
            Model::validateArray($this->permissions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->permissions) {
            if (\is_array($this->permissions)) {
                $res['Permissions'] = [];
                $n1 = 0;
                foreach ($this->permissions as $item1) {
                    $res['Permissions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Permissions'])) {
            if (!empty($map['Permissions'])) {
                $model->permissions = [];
                $n1 = 0;
                foreach ($map['Permissions'] as $item1) {
                    $model->permissions[$n1] = permissions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }

        return $model;
    }
}
