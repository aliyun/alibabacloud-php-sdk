<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupAttributeResponseBody\permissions;
use AlibabaCloud\Tea\Model;

class DescribeSecurityGroupAttributeResponseBody extends Model
{
    /**
     * @description The description of the security group.
     *
     * @example testDescription1
     *
     * @var string
     */
    public $description;

    /**
     * @description Details about the rules.
     *
     * @var permissions
     */
    public $permissions;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the destination security group.
     *
     * @example sg-bp1gxw6bznjjvhu3****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The name of the destination security group.
     *
     * @example testSecurityGroupName2
     *
     * @var string
     */
    public $securityGroupName;
    protected $_name = [
        'description'       => 'Description',
        'permissions'       => 'Permissions',
        'requestId'         => 'RequestId',
        'securityGroupId'   => 'SecurityGroupId',
        'securityGroupName' => 'SecurityGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->permissions) {
            $res['Permissions'] = null !== $this->permissions ? $this->permissions->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return DescribeSecurityGroupAttributeResponseBody
     */
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
