<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class summaryMap extends Model
{
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
    public $attachedPoliciesPerRoleQuota;

    /**
     * @var int
     */
    public $attachedPoliciesPerUserQuota;

    /**
     * @var int
     */
    public $attachedSystemPoliciesPerGroupQuota;

    /**
     * @var int
     */
    public $attachedSystemPoliciesPerRoleQuota;

    /**
     * @var int
     */
    public $attachedSystemPoliciesPerUserQuota;

    /**
     * @var int
     */
    public $groups;

    /**
     * @var int
     */
    public $groupsPerUserQuota;

    /**
     * @var int
     */
    public $groupsQuota;

    /**
     * @var int
     */
    public $MFADevices;

    /**
     * @var int
     */
    public $MFADevicesInUse;

    /**
     * @var int
     */
    public $policies;

    /**
     * @var int
     */
    public $policiesQuota;

    /**
     * @var int
     */
    public $policySizeQuota;

    /**
     * @var int
     */
    public $roles;

    /**
     * @var int
     */
    public $rolesQuota;

    /**
     * @var int
     */
    public $users;

    /**
     * @var int
     */
    public $usersQuota;

    /**
     * @var int
     */
    public $versionsPerPolicyQuota;

    /**
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
