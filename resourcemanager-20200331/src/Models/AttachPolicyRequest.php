<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class AttachPolicyRequest extends Model
{
    /**
     * @description The name of the policy.
     *
     * The name must be 1 to 128 characters in length and can contain letters, digits, and hyphens (-).
     * @example AdministratorAccess
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The type of the policy. Valid values:
     *
     *   Custom: custom policy
     *   System: system policy
     *
     * @example System
     *
     * @var string
     */
    public $policyType;

    /**
     * @description The name of the object to which you want to attach the policy.
     *
     *   If you want to attach the policy to a RAM user, specify the name in the \<UserName>@\<AccountAlias>.onaliyun.com format. \<UserName> indicates the name of the RAM user, and \<AccountAlias> indicates the alias of the Alibaba Cloud account to which the RAM user belongs.
     *   If you want to attach the policy to a RAM user group, specify the name in the \<GroupName>@group.\<AccountAlias>.onaliyun.com format. \<GroupName> indicates the name of the RAM user group, and \<AccountAlias> indicates the alias of the Alibaba Cloud account to which the RAM user group belongs.
     *   If you want to attach the policy to a RAM role, specify the name in the \<RoleName>@role.\<AccountAlias>.onaliyun.com format. \<RoleName> indicates the name of the RAM role, and \<AccountAlias> indicates the alias of the Alibaba Cloud account to which the RAM role belongs.
     *
     * >  The alias of an Alibaba Cloud account is a part of the default domain name. You can call the [GetDefaultDomain](~~186720~~) operation to obtain the alias of an Alibaba Cloud account.
     * @example alice@demo.onaliyun.com
     *
     * @var string
     */
    public $principalName;

    /**
     * @description The type of the object to which you want to attach the policy. Valid values:
     *
     *   IMSUser: RAM user
     *   IMSGroup: RAM user group
     *   ServiceRole: RAM role
     *
     * @example IMSUser
     *
     * @var string
     */
    public $principalType;

    /**
     * @description The effective scope of the policy. You can set this parameter to one of the following items:
     *
     *   ID of a resource group: indicates that the policy takes effect for the resources in the resource group.
     *   ID of the Alibaba Cloud account to which the authorized object belongs: indicates that the policy takes effect for the resources within the Alibaba Cloud account.
     *
     * @example rg-9gLOoK****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'policyName'      => 'PolicyName',
        'policyType'      => 'PolicyType',
        'principalName'   => 'PrincipalName',
        'principalType'   => 'PrincipalType',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->principalType) {
            $res['PrincipalType'] = $this->principalType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['PrincipalType'])) {
            $model->principalType = $map['PrincipalType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
