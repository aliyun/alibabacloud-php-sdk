<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class SetPolicyUserScopeRequest extends Model
{
    /**
     * @description The bastion host ID.
     *
     * This parameter is required.
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the control policy that you want to modify.
     *
     * This parameter is required.
     * @example 1
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The region ID of the bastion host.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The scope of users to whom the control policy applies. Valid values:
     *
     * **All**: The control policy applies to all users.
     * **User**: The control policy applies to specified users.
     * **UserGroup**: The control policy applies to specified user groups.
     *
     * This parameter is required.
     * @example All
     *
     * @var string
     */
    public $scopeType;

    /**
     * @description The user groups to which the control policy applies.
     *
     * > This parameter is required if ScopeType is set to UserGroup. You can specify up to 100 user group IDs.
     * @var string[]
     */
    public $userGroupIds;

    /**
     * @description The users to whom the control policy applies.
     *
     * > This parameter is required if ScopeType is set to User. You can specify up to 500 user IDs.
     * @var string[]
     */
    public $userIds;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'policyId'     => 'PolicyId',
        'regionId'     => 'RegionId',
        'scopeType'    => 'ScopeType',
        'userGroupIds' => 'UserGroupIds',
        'userIds'      => 'UserIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
        }
        if (null !== $this->userGroupIds) {
            $res['UserGroupIds'] = $this->userGroupIds;
        }
        if (null !== $this->userIds) {
            $res['UserIds'] = $this->userIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetPolicyUserScopeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
        }
        if (isset($map['UserGroupIds'])) {
            if (!empty($map['UserGroupIds'])) {
                $model->userGroupIds = $map['UserGroupIds'];
            }
        }
        if (isset($map['UserIds'])) {
            if (!empty($map['UserIds'])) {
                $model->userIds = $map['UserIds'];
            }
        }

        return $model;
    }
}
