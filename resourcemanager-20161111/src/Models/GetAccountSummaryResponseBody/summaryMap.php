<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetAccountSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class summaryMap extends Model
{
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
    public $resourceGroups;

    /**
     * @var int
     */
    public $resourceGroupsQuota;

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
    public $versionsPerPolicyQuota;
    protected $_name = [
        'attachedPoliciesPerGroupQuota'       => 'AttachedPoliciesPerGroupQuota',
        'attachedPoliciesPerRoleQuota'        => 'AttachedPoliciesPerRoleQuota',
        'attachedPoliciesPerUserQuota'        => 'AttachedPoliciesPerUserQuota',
        'attachedSystemPoliciesPerGroupQuota' => 'AttachedSystemPoliciesPerGroupQuota',
        'attachedSystemPoliciesPerRoleQuota'  => 'AttachedSystemPoliciesPerRoleQuota',
        'attachedSystemPoliciesPerUserQuota'  => 'AttachedSystemPoliciesPerUserQuota',
        'policies'                            => 'Policies',
        'policiesQuota'                       => 'PoliciesQuota',
        'policySizeQuota'                     => 'PolicySizeQuota',
        'resourceGroups'                      => 'ResourceGroups',
        'resourceGroupsQuota'                 => 'ResourceGroupsQuota',
        'roles'                               => 'Roles',
        'rolesQuota'                          => 'RolesQuota',
        'versionsPerPolicyQuota'              => 'VersionsPerPolicyQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->policies) {
            $res['Policies'] = $this->policies;
        }
        if (null !== $this->policiesQuota) {
            $res['PoliciesQuota'] = $this->policiesQuota;
        }
        if (null !== $this->policySizeQuota) {
            $res['PolicySizeQuota'] = $this->policySizeQuota;
        }
        if (null !== $this->resourceGroups) {
            $res['ResourceGroups'] = $this->resourceGroups;
        }
        if (null !== $this->resourceGroupsQuota) {
            $res['ResourceGroupsQuota'] = $this->resourceGroupsQuota;
        }
        if (null !== $this->roles) {
            $res['Roles'] = $this->roles;
        }
        if (null !== $this->rolesQuota) {
            $res['RolesQuota'] = $this->rolesQuota;
        }
        if (null !== $this->versionsPerPolicyQuota) {
            $res['VersionsPerPolicyQuota'] = $this->versionsPerPolicyQuota;
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
        if (isset($map['Policies'])) {
            $model->policies = $map['Policies'];
        }
        if (isset($map['PoliciesQuota'])) {
            $model->policiesQuota = $map['PoliciesQuota'];
        }
        if (isset($map['PolicySizeQuota'])) {
            $model->policySizeQuota = $map['PolicySizeQuota'];
        }
        if (isset($map['ResourceGroups'])) {
            $model->resourceGroups = $map['ResourceGroups'];
        }
        if (isset($map['ResourceGroupsQuota'])) {
            $model->resourceGroupsQuota = $map['ResourceGroupsQuota'];
        }
        if (isset($map['Roles'])) {
            $model->roles = $map['Roles'];
        }
        if (isset($map['RolesQuota'])) {
            $model->rolesQuota = $map['RolesQuota'];
        }
        if (isset($map['VersionsPerPolicyQuota'])) {
            $model->versionsPerPolicyQuota = $map['VersionsPerPolicyQuota'];
        }

        return $model;
    }
}
