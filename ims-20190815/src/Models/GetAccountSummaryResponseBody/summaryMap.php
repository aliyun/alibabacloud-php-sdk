<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class summaryMap extends Model
{
    /**
     * @var int
     */
    public $MFADevices;

    /**
     * @var int
     */
    public $accessKeysPerUserQuota;

    /**
     * @var int
     */
    public $attachedPoliciesPerGroupQuota;

    /**
     * @var int
     */
    public $attachedSystemPoliciesPerRoleQuota;

    /**
     * @var int
     */
    public $attachedPoliciesPerRoleQuota;

    /**
     * @var int
     */
    public $groupsPerUserQuota;

    /**
     * @var int
     */
    public $roles;

    /**
     * @var int
     */
    public $policySizeQuota;

    /**
     * @var int
     */
    public $attachedSystemPoliciesPerGroupQuota;

    /**
     * @var int
     */
    public $attachedSystemPoliciesPerUserQuota;

    /**
     * @var int
     */
    public $attachedPoliciesPerUserQuota;

    /**
     * @var int
     */
    public $groupsQuota;

    /**
     * @var int
     */
    public $groups;

    /**
     * @var int
     */
    public $policiesQuota;

    /**
     * @var int
     */
    public $virtualMFADevicesQuota;

    /**
     * @var int
     */
    public $versionsPerPolicyQuota;

    /**
     * @var int
     */
    public $rolesQuota;

    /**
     * @var int
     */
    public $usersQuota;

    /**
     * @var int
     */
    public $policies;

    /**
     * @var int
     */
    public $users;

    /**
     * @var int
     */
    public $MFADevicesInUse;
    protected $_name = [
        'MFADevices'                          => 'MFADevices',
        'accessKeysPerUserQuota'              => 'AccessKeysPerUserQuota',
        'attachedPoliciesPerGroupQuota'       => 'AttachedPoliciesPerGroupQuota',
        'attachedSystemPoliciesPerRoleQuota'  => 'AttachedSystemPoliciesPerRoleQuota',
        'attachedPoliciesPerRoleQuota'        => 'AttachedPoliciesPerRoleQuota',
        'groupsPerUserQuota'                  => 'GroupsPerUserQuota',
        'roles'                               => 'Roles',
        'policySizeQuota'                     => 'PolicySizeQuota',
        'attachedSystemPoliciesPerGroupQuota' => 'AttachedSystemPoliciesPerGroupQuota',
        'attachedSystemPoliciesPerUserQuota'  => 'AttachedSystemPoliciesPerUserQuota',
        'attachedPoliciesPerUserQuota'        => 'AttachedPoliciesPerUserQuota',
        'groupsQuota'                         => 'GroupsQuota',
        'groups'                              => 'Groups',
        'policiesQuota'                       => 'PoliciesQuota',
        'virtualMFADevicesQuota'              => 'VirtualMFADevicesQuota',
        'versionsPerPolicyQuota'              => 'VersionsPerPolicyQuota',
        'rolesQuota'                          => 'RolesQuota',
        'usersQuota'                          => 'UsersQuota',
        'policies'                            => 'Policies',
        'users'                               => 'Users',
        'MFADevicesInUse'                     => 'MFADevicesInUse',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->MFADevices) {
            $res['MFADevices'] = $this->MFADevices;
        }
        if (null !== $this->accessKeysPerUserQuota) {
            $res['AccessKeysPerUserQuota'] = $this->accessKeysPerUserQuota;
        }
        if (null !== $this->attachedPoliciesPerGroupQuota) {
            $res['AttachedPoliciesPerGroupQuota'] = $this->attachedPoliciesPerGroupQuota;
        }
        if (null !== $this->attachedSystemPoliciesPerRoleQuota) {
            $res['AttachedSystemPoliciesPerRoleQuota'] = $this->attachedSystemPoliciesPerRoleQuota;
        }
        if (null !== $this->attachedPoliciesPerRoleQuota) {
            $res['AttachedPoliciesPerRoleQuota'] = $this->attachedPoliciesPerRoleQuota;
        }
        if (null !== $this->groupsPerUserQuota) {
            $res['GroupsPerUserQuota'] = $this->groupsPerUserQuota;
        }
        if (null !== $this->roles) {
            $res['Roles'] = $this->roles;
        }
        if (null !== $this->policySizeQuota) {
            $res['PolicySizeQuota'] = $this->policySizeQuota;
        }
        if (null !== $this->attachedSystemPoliciesPerGroupQuota) {
            $res['AttachedSystemPoliciesPerGroupQuota'] = $this->attachedSystemPoliciesPerGroupQuota;
        }
        if (null !== $this->attachedSystemPoliciesPerUserQuota) {
            $res['AttachedSystemPoliciesPerUserQuota'] = $this->attachedSystemPoliciesPerUserQuota;
        }
        if (null !== $this->attachedPoliciesPerUserQuota) {
            $res['AttachedPoliciesPerUserQuota'] = $this->attachedPoliciesPerUserQuota;
        }
        if (null !== $this->groupsQuota) {
            $res['GroupsQuota'] = $this->groupsQuota;
        }
        if (null !== $this->groups) {
            $res['Groups'] = $this->groups;
        }
        if (null !== $this->policiesQuota) {
            $res['PoliciesQuota'] = $this->policiesQuota;
        }
        if (null !== $this->virtualMFADevicesQuota) {
            $res['VirtualMFADevicesQuota'] = $this->virtualMFADevicesQuota;
        }
        if (null !== $this->versionsPerPolicyQuota) {
            $res['VersionsPerPolicyQuota'] = $this->versionsPerPolicyQuota;
        }
        if (null !== $this->rolesQuota) {
            $res['RolesQuota'] = $this->rolesQuota;
        }
        if (null !== $this->usersQuota) {
            $res['UsersQuota'] = $this->usersQuota;
        }
        if (null !== $this->policies) {
            $res['Policies'] = $this->policies;
        }
        if (null !== $this->users) {
            $res['Users'] = $this->users;
        }
        if (null !== $this->MFADevicesInUse) {
            $res['MFADevicesInUse'] = $this->MFADevicesInUse;
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
        if (isset($map['MFADevices'])) {
            $model->MFADevices = $map['MFADevices'];
        }
        if (isset($map['AccessKeysPerUserQuota'])) {
            $model->accessKeysPerUserQuota = $map['AccessKeysPerUserQuota'];
        }
        if (isset($map['AttachedPoliciesPerGroupQuota'])) {
            $model->attachedPoliciesPerGroupQuota = $map['AttachedPoliciesPerGroupQuota'];
        }
        if (isset($map['AttachedSystemPoliciesPerRoleQuota'])) {
            $model->attachedSystemPoliciesPerRoleQuota = $map['AttachedSystemPoliciesPerRoleQuota'];
        }
        if (isset($map['AttachedPoliciesPerRoleQuota'])) {
            $model->attachedPoliciesPerRoleQuota = $map['AttachedPoliciesPerRoleQuota'];
        }
        if (isset($map['GroupsPerUserQuota'])) {
            $model->groupsPerUserQuota = $map['GroupsPerUserQuota'];
        }
        if (isset($map['Roles'])) {
            $model->roles = $map['Roles'];
        }
        if (isset($map['PolicySizeQuota'])) {
            $model->policySizeQuota = $map['PolicySizeQuota'];
        }
        if (isset($map['AttachedSystemPoliciesPerGroupQuota'])) {
            $model->attachedSystemPoliciesPerGroupQuota = $map['AttachedSystemPoliciesPerGroupQuota'];
        }
        if (isset($map['AttachedSystemPoliciesPerUserQuota'])) {
            $model->attachedSystemPoliciesPerUserQuota = $map['AttachedSystemPoliciesPerUserQuota'];
        }
        if (isset($map['AttachedPoliciesPerUserQuota'])) {
            $model->attachedPoliciesPerUserQuota = $map['AttachedPoliciesPerUserQuota'];
        }
        if (isset($map['GroupsQuota'])) {
            $model->groupsQuota = $map['GroupsQuota'];
        }
        if (isset($map['Groups'])) {
            $model->groups = $map['Groups'];
        }
        if (isset($map['PoliciesQuota'])) {
            $model->policiesQuota = $map['PoliciesQuota'];
        }
        if (isset($map['VirtualMFADevicesQuota'])) {
            $model->virtualMFADevicesQuota = $map['VirtualMFADevicesQuota'];
        }
        if (isset($map['VersionsPerPolicyQuota'])) {
            $model->versionsPerPolicyQuota = $map['VersionsPerPolicyQuota'];
        }
        if (isset($map['RolesQuota'])) {
            $model->rolesQuota = $map['RolesQuota'];
        }
        if (isset($map['UsersQuota'])) {
            $model->usersQuota = $map['UsersQuota'];
        }
        if (isset($map['Policies'])) {
            $model->policies = $map['Policies'];
        }
        if (isset($map['Users'])) {
            $model->users = $map['Users'];
        }
        if (isset($map['MFADevicesInUse'])) {
            $model->MFADevicesInUse = $map['MFADevicesInUse'];
        }

        return $model;
    }
}
