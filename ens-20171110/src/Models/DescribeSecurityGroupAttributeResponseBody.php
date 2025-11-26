<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupAttributeResponseBody\permissions;

class DescribeSecurityGroupAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var permissions
     */
    public $permissions;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $securityGroupName;
    protected $_name = [
        'description' => 'Description',
        'permissions' => 'Permissions',
        'requestId' => 'RequestId',
        'securityGroupId' => 'SecurityGroupId',
        'securityGroupName' => 'SecurityGroupName',
    ];

    public function validate()
    {
        if (null !== $this->permissions) {
            $this->permissions->validate();
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
            $res['Permissions'] = null !== $this->permissions ? $this->permissions->toArray($noStream) : $this->permissions;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
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
            $model->permissions = permissions::fromMap($map['Permissions']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }

        return $model;
    }
}
