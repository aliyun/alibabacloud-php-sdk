<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupAttributeResponseBody\permissions;
use AlibabaCloud\Tea\Model;

class DescribeSecurityGroupAttributeResponseBody extends Model
{
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
    protected $_name = [
        'permissions'     => 'Permissions',
        'requestId'       => 'RequestId',
        'securityGroupId' => 'SecurityGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->permissions) {
            $res['Permissions'] = null !== $this->permissions ? $this->permissions->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecurityGroupAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Permissions'])) {
            $model->permissions = permissions::fromMap($map['Permissions']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        return $model;
    }
}
