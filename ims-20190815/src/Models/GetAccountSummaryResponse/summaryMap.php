<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSummaryResponse;

use AlibabaCloud\Tea\Model;

class summaryMap extends Model
{
    /**
     * @var int
     */
    public $policies;

    /**
     * @var int
     */
    public $groupsPerUserQuota;

    /**
     * @var int
     */
    public $attachedPoliciesPerUserQuota;

    /**
     * @var int
     */
    public $roles;

    /**
     * @var int
     */
    public $users;

    /**
     * @var int
     */
    public $rolesQuota;

    /**
     * @var int
     */
    public $virtualMFADevicesQuota;

    /**
     * @var int
     */
    public $policiesQuota;

    /**
     * @var int
     */
    public $attachedSystemPoliciesPerGroupQuota;

    /**
     * @var int
     */
    public $MFADevicesInUse;

    /**
     * @var int
     */
    public $accessKeysPerUserQuota;

    /**
     * @var int
     */
    public $versionsPerPolicyQuota;

    /**
     * @var int
     */
    public $policySizeQuota;

    /**
     * @var int
     */
    public $attachedPoliciesPerGroupQuota;

    /**
     * @var int
     */
    public $groups;

    /**
     * @var int
     */
    public $attachedSystemPoliciesPerUserQuota;

    /**
     * @var int
     */
    public $usersQuota;

    /**
     * @var int
     */
    public $attachedPoliciesPerRoleQuota;

    /**
     * @var int
     */
    public $attachedSystemPoliciesPerRoleQuota;

    /**
     * @var int
     */
    public $MFADevices;

    /**
     * @var int
     */
    public $groupsQuota;
    protected $_name = [
        'policies'                            => 'Policies',
        'groupsPerUserQuota'                  => 'GroupsPerUserQuota',
        'attachedPoliciesPerUserQuota'        => 'AttachedPoliciesPerUserQuota',
        'roles'                               => 'Roles',
        'users'                               => 'Users',
        'rolesQuota'                          => 'RolesQuota',
        'virtualMFADevicesQuota'              => 'VirtualMFADevicesQuota',
        'policiesQuota'                       => 'PoliciesQuota',
        'attachedSystemPoliciesPerGroupQuota' => 'AttachedSystemPoliciesPerGroupQuota',
        'MFADevicesInUse'                     => 'MFADevicesInUse',
        'accessKeysPerUserQuota'              => 'AccessKeysPerUserQuota',
        'versionsPerPolicyQuota'              => 'VersionsPerPolicyQuota',
        'policySizeQuota'                     => 'PolicySizeQuota',
        'attachedPoliciesPerGroupQuota'       => 'AttachedPoliciesPerGroupQuota',
        'groups'                              => 'Groups',
        'attachedSystemPoliciesPerUserQuota'  => 'AttachedSystemPoliciesPerUserQuota',
        'usersQuota'                          => 'UsersQuota',
        'attachedPoliciesPerRoleQuota'        => 'AttachedPoliciesPerRoleQuota',
        'attachedSystemPoliciesPerRoleQuota'  => 'AttachedSystemPoliciesPerRoleQuota',
        'MFADevices'                          => 'MFADevices',
        'groupsQuota'                         => 'GroupsQuota',
    ];

    public function validate()
    {
        Model::validateRequired('policies', $this->policies, true);
        Model::validateRequired('groupsPerUserQuota', $this->groupsPerUserQuota, true);
        Model::validateRequired('attachedPoliciesPerUserQuota', $this->attachedPoliciesPerUserQuota, true);
        Model::validateRequired('roles', $this->roles, true);
        Model::validateRequired('users', $this->users, true);
        Model::validateRequired('rolesQuota', $this->rolesQuota, true);
        Model::validateRequired('virtualMFADevicesQuota', $this->virtualMFADevicesQuota, true);
        Model::validateRequired('policiesQuota', $this->policiesQuota, true);
        Model::validateRequired('attachedSystemPoliciesPerGroupQuota', $this->attachedSystemPoliciesPerGroupQuota, true);
        Model::validateRequired('MFADevicesInUse', $this->MFADevicesInUse, true);
        Model::validateRequired('accessKeysPerUserQuota', $this->accessKeysPerUserQuota, true);
        Model::validateRequired('versionsPerPolicyQuota', $this->versionsPerPolicyQuota, true);
        Model::validateRequired('policySizeQuota', $this->policySizeQuota, true);
        Model::validateRequired('attachedPoliciesPerGroupQuota', $this->attachedPoliciesPerGroupQuota, true);
        Model::validateRequired('groups', $this->groups, true);
        Model::validateRequired('attachedSystemPoliciesPerUserQuota', $this->attachedSystemPoliciesPerUserQuota, true);
        Model::validateRequired('usersQuota', $this->usersQuota, true);
        Model::validateRequired('attachedPoliciesPerRoleQuota', $this->attachedPoliciesPerRoleQuota, true);
        Model::validateRequired('attachedSystemPoliciesPerRoleQuota', $this->attachedSystemPoliciesPerRoleQuota, true);
        Model::validateRequired('MFADevices', $this->MFADevices, true);
        Model::validateRequired('groupsQuota', $this->groupsQuota, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policies) {
            $res['Policies'] = $this->policies;
        }
        if (null !== $this->groupsPerUserQuota) {
            $res['GroupsPerUserQuota'] = $this->groupsPerUserQuota;
        }
        if (null !== $this->attachedPoliciesPerUserQuota) {
            $res['AttachedPoliciesPerUserQuota'] = $this->attachedPoliciesPerUserQuota;
        }
        if (null !== $this->roles) {
            $res['Roles'] = $this->roles;
        }
        if (null !== $this->users) {
            $res['Users'] = $this->users;
        }
        if (null !== $this->rolesQuota) {
            $res['RolesQuota'] = $this->rolesQuota;
        }
        if (null !== $this->virtualMFADevicesQuota) {
            $res['VirtualMFADevicesQuota'] = $this->virtualMFADevicesQuota;
        }
        if (null !== $this->policiesQuota) {
            $res['PoliciesQuota'] = $this->policiesQuota;
        }
        if (null !== $this->attachedSystemPoliciesPerGroupQuota) {
            $res['AttachedSystemPoliciesPerGroupQuota'] = $this->attachedSystemPoliciesPerGroupQuota;
        }
        if (null !== $this->MFADevicesInUse) {
            $res['MFADevicesInUse'] = $this->MFADevicesInUse;
        }
        if (null !== $this->accessKeysPerUserQuota) {
            $res['AccessKeysPerUserQuota'] = $this->accessKeysPerUserQuota;
        }
        if (null !== $this->versionsPerPolicyQuota) {
            $res['VersionsPerPolicyQuota'] = $this->versionsPerPolicyQuota;
        }
        if (null !== $this->policySizeQuota) {
            $res['PolicySizeQuota'] = $this->policySizeQuota;
        }
        if (null !== $this->attachedPoliciesPerGroupQuota) {
            $res['AttachedPoliciesPerGroupQuota'] = $this->attachedPoliciesPerGroupQuota;
        }
        if (null !== $this->groups) {
            $res['Groups'] = $this->groups;
        }
        if (null !== $this->attachedSystemPoliciesPerUserQuota) {
            $res['AttachedSystemPoliciesPerUserQuota'] = $this->attachedSystemPoliciesPerUserQuota;
        }
        if (null !== $this->usersQuota) {
            $res['UsersQuota'] = $this->usersQuota;
        }
        if (null !== $this->attachedPoliciesPerRoleQuota) {
            $res['AttachedPoliciesPerRoleQuota'] = $this->attachedPoliciesPerRoleQuota;
        }
        if (null !== $this->attachedSystemPoliciesPerRoleQuota) {
            $res['AttachedSystemPoliciesPerRoleQuota'] = $this->attachedSystemPoliciesPerRoleQuota;
        }
        if (null !== $this->MFADevices) {
            $res['MFADevices'] = $this->MFADevices;
        }
        if (null !== $this->groupsQuota) {
            $res['GroupsQuota'] = $this->groupsQuota;
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
        if (isset($map['Policies'])) {
            $model->policies = $map['Policies'];
        }
        if (isset($map['GroupsPerUserQuota'])) {
            $model->groupsPerUserQuota = $map['GroupsPerUserQuota'];
        }
        if (isset($map['AttachedPoliciesPerUserQuota'])) {
            $model->attachedPoliciesPerUserQuota = $map['AttachedPoliciesPerUserQuota'];
        }
        if (isset($map['Roles'])) {
            $model->roles = $map['Roles'];
        }
        if (isset($map['Users'])) {
            $model->users = $map['Users'];
        }
        if (isset($map['RolesQuota'])) {
            $model->rolesQuota = $map['RolesQuota'];
        }
        if (isset($map['VirtualMFADevicesQuota'])) {
            $model->virtualMFADevicesQuota = $map['VirtualMFADevicesQuota'];
        }
        if (isset($map['PoliciesQuota'])) {
            $model->policiesQuota = $map['PoliciesQuota'];
        }
        if (isset($map['AttachedSystemPoliciesPerGroupQuota'])) {
            $model->attachedSystemPoliciesPerGroupQuota = $map['AttachedSystemPoliciesPerGroupQuota'];
        }
        if (isset($map['MFADevicesInUse'])) {
            $model->MFADevicesInUse = $map['MFADevicesInUse'];
        }
        if (isset($map['AccessKeysPerUserQuota'])) {
            $model->accessKeysPerUserQuota = $map['AccessKeysPerUserQuota'];
        }
        if (isset($map['VersionsPerPolicyQuota'])) {
            $model->versionsPerPolicyQuota = $map['VersionsPerPolicyQuota'];
        }
        if (isset($map['PolicySizeQuota'])) {
            $model->policySizeQuota = $map['PolicySizeQuota'];
        }
        if (isset($map['AttachedPoliciesPerGroupQuota'])) {
            $model->attachedPoliciesPerGroupQuota = $map['AttachedPoliciesPerGroupQuota'];
        }
        if (isset($map['Groups'])) {
            $model->groups = $map['Groups'];
        }
        if (isset($map['AttachedSystemPoliciesPerUserQuota'])) {
            $model->attachedSystemPoliciesPerUserQuota = $map['AttachedSystemPoliciesPerUserQuota'];
        }
        if (isset($map['UsersQuota'])) {
            $model->usersQuota = $map['UsersQuota'];
        }
        if (isset($map['AttachedPoliciesPerRoleQuota'])) {
            $model->attachedPoliciesPerRoleQuota = $map['AttachedPoliciesPerRoleQuota'];
        }
        if (isset($map['AttachedSystemPoliciesPerRoleQuota'])) {
            $model->attachedSystemPoliciesPerRoleQuota = $map['AttachedSystemPoliciesPerRoleQuota'];
        }
        if (isset($map['MFADevices'])) {
            $model->MFADevices = $map['MFADevices'];
        }
        if (isset($map['GroupsQuota'])) {
            $model->groupsQuota = $map['GroupsQuota'];
        }

        return $model;
    }
}
