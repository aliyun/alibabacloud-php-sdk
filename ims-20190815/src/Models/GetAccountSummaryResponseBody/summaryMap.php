<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class summaryMap extends Model
{
    /**
     * @description The maximum number of AccessKey pairs that a RAM user can have.
     *
     * @example 2
     *
     * @var int
     */
    public $accessKeysPerUserQuota;

    /**
     * @description The maximum number of custom policies that can be added to a RAM user group.
     *
     * @example 5
     *
     * @var int
     */
    public $attachedPoliciesPerGroupQuota;

    /**
     * @description The maximum number of custom policies that can be added to a RAM role.
     *
     * @example 5
     *
     * @var int
     */
    public $attachedPoliciesPerRoleQuota;

    /**
     * @description The maximum number of custom policies that can be added to a RAM user.
     *
     * @example 10
     *
     * @var int
     */
    public $attachedPoliciesPerUserQuota;

    /**
     * @description The maximum number of system policies that can be added to a RAM user group.
     *
     * @example 20
     *
     * @var int
     */
    public $attachedSystemPoliciesPerGroupQuota;

    /**
     * @description The maximum number of system policies that can be added to a RAM role.
     *
     * @example 20
     *
     * @var int
     */
    public $attachedSystemPoliciesPerRoleQuota;

    /**
     * @description The maximum number of system policies that can be added to a RAM user.
     *
     * @example 20
     *
     * @var int
     */
    public $attachedSystemPoliciesPerUserQuota;

    /**
     * @description The number of RAM user groups.
     *
     * @example 7
     *
     * @var int
     */
    public $groups;

    /**
     * @description The maximum number of RAM user groups to which a RAM user can be added.
     *
     * @example 5
     *
     * @var int
     */
    public $groupsPerUserQuota;

    /**
     * @description The maximum number of RAM user groups that can be created.
     *
     * @example 50
     *
     * @var int
     */
    public $groupsQuota;

    /**
     * @description The number of virtual multi-factor authentication (MFA) devices.
     *
     * @example 13
     *
     * @var int
     */
    public $MFADevices;

    /**
     * @description The number of virtual MFA devices in use.
     *
     * @example 2
     *
     * @var int
     */
    public $MFADevicesInUse;

    /**
     * @description The number of custom policies.
     *
     * @example 13
     *
     * @var int
     */
    public $policies;

    /**
     * @description The maximum number of custom policies that can be created.
     *
     * @example 1500
     *
     * @var int
     */
    public $policiesQuota;

    /**
     * @description The maximum length of the policy content.
     *
     * @example 2048
     *
     * @var int
     */
    public $policySizeQuota;

    /**
     * @description The number of RAM roles.
     *
     * @example 19
     *
     * @var int
     */
    public $roles;

    /**
     * @description The maximum number of RAM roles that can be created.
     *
     * @example 1000
     *
     * @var int
     */
    public $rolesQuota;

    /**
     * @description The number of RAM users.
     *
     * @example 9
     *
     * @var int
     */
    public $users;

    /**
     * @description The maximum number of RAM users that can be created.
     *
     * @example 1000
     *
     * @var int
     */
    public $usersQuota;

    /**
     * @description The maximum number of policy versions.
     *
     * @example 5
     *
     * @var int
     */
    public $versionsPerPolicyQuota;

    /**
     * @description The maximum number of virtual MFA devices that can be created.
     *
     * @example 1000
     *
     * @var int
     */
    public $virtualMFADevicesQuota;
    protected $_name = [
        'accessKeysPerUserQuota'              => 'AccessKeysPerUserQuota',
        'attachedPoliciesPerGroupQuota'       => 'AttachedPoliciesPerGroupQuota',
        'attachedPoliciesPerRoleQuota'        => 'AttachedPoliciesPerRoleQuota',
        'attachedPoliciesPerUserQuota'        => 'AttachedPoliciesPerUserQuota',
        'attachedSystemPoliciesPerGroupQuota' => 'AttachedSystemPoliciesPerGroupQuota',
        'attachedSystemPoliciesPerRoleQuota'  => 'AttachedSystemPoliciesPerRoleQuota',
        'attachedSystemPoliciesPerUserQuota'  => 'AttachedSystemPoliciesPerUserQuota',
        'groups'                              => 'Groups',
        'groupsPerUserQuota'                  => 'GroupsPerUserQuota',
        'groupsQuota'                         => 'GroupsQuota',
        'MFADevices'                          => 'MFADevices',
        'MFADevicesInUse'                     => 'MFADevicesInUse',
        'policies'                            => 'Policies',
        'policiesQuota'                       => 'PoliciesQuota',
        'policySizeQuota'                     => 'PolicySizeQuota',
        'roles'                               => 'Roles',
        'rolesQuota'                          => 'RolesQuota',
        'users'                               => 'Users',
        'usersQuota'                          => 'UsersQuota',
        'versionsPerPolicyQuota'              => 'VersionsPerPolicyQuota',
        'virtualMFADevicesQuota'              => 'VirtualMFADevicesQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeysPerUserQuota) {
            $res['AccessKeysPerUserQuota'] = $this->accessKeysPerUserQuota;
        }
        if (null !== $this->attachedPoliciesPerGroupQuota) {
            $res['AttachedPoliciesPerGroupQuota'] = $this->attachedPoliciesPerGroupQuota;
        }
        if (null !== $this->attachedPoliciesPerRoleQuota) {
            $res['AttachedPoliciesPerRoleQuota'] = $this->attachedPoliciesPerRoleQuota;
        }
        if (null !== $this->attachedPoliciesPerUserQuota) {
            $res['AttachedPoliciesPerUserQuota'] = $this->attachedPoliciesPerUserQuota;
        }
        if (null !== $this->attachedSystemPoliciesPerGroupQuota) {
            $res['AttachedSystemPoliciesPerGroupQuota'] = $this->attachedSystemPoliciesPerGroupQuota;
        }
        if (null !== $this->attachedSystemPoliciesPerRoleQuota) {
            $res['AttachedSystemPoliciesPerRoleQuota'] = $this->attachedSystemPoliciesPerRoleQuota;
        }
        if (null !== $this->attachedSystemPoliciesPerUserQuota) {
            $res['AttachedSystemPoliciesPerUserQuota'] = $this->attachedSystemPoliciesPerUserQuota;
        }
        if (null !== $this->groups) {
            $res['Groups'] = $this->groups;
        }
        if (null !== $this->groupsPerUserQuota) {
            $res['GroupsPerUserQuota'] = $this->groupsPerUserQuota;
        }
        if (null !== $this->groupsQuota) {
            $res['GroupsQuota'] = $this->groupsQuota;
        }
        if (null !== $this->MFADevices) {
            $res['MFADevices'] = $this->MFADevices;
        }
        if (null !== $this->MFADevicesInUse) {
            $res['MFADevicesInUse'] = $this->MFADevicesInUse;
        }
        if (null !== $this->policies) {
            $res['Policies'] = $this->policies;
        }
        if (null !== $this->policiesQuota) {
            $res['PoliciesQuota'] = $this->policiesQuota;
        }
        if (null !== $this->policySizeQuota) {
            $res['PolicySizeQuota'] = $this->policySizeQuota;
        }
        if (null !== $this->roles) {
            $res['Roles'] = $this->roles;
        }
        if (null !== $this->rolesQuota) {
            $res['RolesQuota'] = $this->rolesQuota;
        }
        if (null !== $this->users) {
            $res['Users'] = $this->users;
        }
        if (null !== $this->usersQuota) {
            $res['UsersQuota'] = $this->usersQuota;
        }
        if (null !== $this->versionsPerPolicyQuota) {
            $res['VersionsPerPolicyQuota'] = $this->versionsPerPolicyQuota;
        }
        if (null !== $this->virtualMFADevicesQuota) {
            $res['VirtualMFADevicesQuota'] = $this->virtualMFADevicesQuota;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summaryMap
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeysPerUserQuota'])) {
            $model->accessKeysPerUserQuota = $map['AccessKeysPerUserQuota'];
        }
        if (isset($map['AttachedPoliciesPerGroupQuota'])) {
            $model->attachedPoliciesPerGroupQuota = $map['AttachedPoliciesPerGroupQuota'];
        }
        if (isset($map['AttachedPoliciesPerRoleQuota'])) {
            $model->attachedPoliciesPerRoleQuota = $map['AttachedPoliciesPerRoleQuota'];
        }
        if (isset($map['AttachedPoliciesPerUserQuota'])) {
            $model->attachedPoliciesPerUserQuota = $map['AttachedPoliciesPerUserQuota'];
        }
        if (isset($map['AttachedSystemPoliciesPerGroupQuota'])) {
            $model->attachedSystemPoliciesPerGroupQuota = $map['AttachedSystemPoliciesPerGroupQuota'];
        }
        if (isset($map['AttachedSystemPoliciesPerRoleQuota'])) {
            $model->attachedSystemPoliciesPerRoleQuota = $map['AttachedSystemPoliciesPerRoleQuota'];
        }
        if (isset($map['AttachedSystemPoliciesPerUserQuota'])) {
            $model->attachedSystemPoliciesPerUserQuota = $map['AttachedSystemPoliciesPerUserQuota'];
        }
        if (isset($map['Groups'])) {
            $model->groups = $map['Groups'];
        }
        if (isset($map['GroupsPerUserQuota'])) {
            $model->groupsPerUserQuota = $map['GroupsPerUserQuota'];
        }
        if (isset($map['GroupsQuota'])) {
            $model->groupsQuota = $map['GroupsQuota'];
        }
        if (isset($map['MFADevices'])) {
            $model->MFADevices = $map['MFADevices'];
        }
        if (isset($map['MFADevicesInUse'])) {
            $model->MFADevicesInUse = $map['MFADevicesInUse'];
        }
        if (isset($map['Policies'])) {
            $model->policies = $map['Policies'];
        }
        if (isset($map['PoliciesQuota'])) {
            $model->policiesQuota = $map['PoliciesQuota'];
        }
        if (isset($map['PolicySizeQuota'])) {
            $model->policySizeQuota = $map['PolicySizeQuota'];
        }
        if (isset($map['Roles'])) {
            $model->roles = $map['Roles'];
        }
        if (isset($map['RolesQuota'])) {
            $model->rolesQuota = $map['RolesQuota'];
        }
        if (isset($map['Users'])) {
            $model->users = $map['Users'];
        }
        if (isset($map['UsersQuota'])) {
            $model->usersQuota = $map['UsersQuota'];
        }
        if (isset($map['VersionsPerPolicyQuota'])) {
            $model->versionsPerPolicyQuota = $map['VersionsPerPolicyQuota'];
        }
        if (isset($map['VirtualMFADevicesQuota'])) {
            $model->virtualMFADevicesQuota = $map['VirtualMFADevicesQuota'];
        }

        return $model;
    }
}
