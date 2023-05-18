<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class CreateRoleRequest extends Model
{
    /**
     * @description The document of the policy that specifies one or more trusted entities to assume the RAM role. The trusted entities can be Alibaba Cloud accounts, Alibaba Cloud services, or identity providers (IdPs).
     *
     * >  RAM users cannot assume the RAM roles of trusted Alibaba Cloud services.
     * @example { "Statement": [ { "Action": "sts:AssumeRole", "Effect": "Allow", "Principal": { "RAM": "acs:ram::12345678901234****:root" } } ], "Version": "1" }
     *
     * @var string
     */
    public $assumeRolePolicyDocument;

    /**
     * @description The description of the RAM role.
     *
     * The description must be 1 to 1,024 characters in length.
     * @var string
     */
    public $description;

    /**
     * @description The maximum session duration of the RAM role.
     *
     * If you do not specify this parameter, the default value is used.
     * @example 3600
     *
     * @var int
     */
    public $maxSessionDuration;

    /**
     * @description The name of the RAM role.
     *
     * The name must be 1 to 64 characters in length and can contain letters, digits, periods (.), and hyphens (-).
     * @example ECSAdmin
     *
     * @var string
     */
    public $roleName;
    protected $_name = [
        'assumeRolePolicyDocument' => 'AssumeRolePolicyDocument',
        'description'              => 'Description',
        'maxSessionDuration'       => 'MaxSessionDuration',
        'roleName'                 => 'RoleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assumeRolePolicyDocument) {
            $res['AssumeRolePolicyDocument'] = $this->assumeRolePolicyDocument;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->maxSessionDuration) {
            $res['MaxSessionDuration'] = $this->maxSessionDuration;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssumeRolePolicyDocument'])) {
            $model->assumeRolePolicyDocument = $map['AssumeRolePolicyDocument'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MaxSessionDuration'])) {
            $model->maxSessionDuration = $map['MaxSessionDuration'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
