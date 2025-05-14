<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyInstancesResponse;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $policyCategory;

    /**
     * @var string
     */
    public $policyDescription;

    /**
     * @var string
     */
    public $policyParameters;

    /**
     * @var string
     */
    public $policySeverity;

    /**
     * @var string
     */
    public $policyScope;

    /**
     * @var string
     */
    public $policyAction;

    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $updated;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var int
     */
    public $totalViolations;

    /**
     * @var int
     */
    public $isDeleted;
    protected $_name = [
        'aliUid' => 'ali_uid',
        'clusterId' => 'cluster_id',
        'instanceName' => 'instance_name',
        'policyName' => 'policy_name',
        'policyCategory' => 'policy_category',
        'policyDescription' => 'policy_description',
        'policyParameters' => 'policy_parameters',
        'policySeverity' => 'policy_severity',
        'policyScope' => 'policy_scope',
        'policyAction' => 'policy_action',
        'created' => 'Created',
        'updated' => 'Updated',
        'resourceId' => 'resource_id',
        'totalViolations' => 'total_violations',
        'isDeleted' => 'is_deleted',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['ali_uid'] = $this->aliUid;
        }

        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }

        if (null !== $this->instanceName) {
            $res['instance_name'] = $this->instanceName;
        }

        if (null !== $this->policyName) {
            $res['policy_name'] = $this->policyName;
        }

        if (null !== $this->policyCategory) {
            $res['policy_category'] = $this->policyCategory;
        }

        if (null !== $this->policyDescription) {
            $res['policy_description'] = $this->policyDescription;
        }

        if (null !== $this->policyParameters) {
            $res['policy_parameters'] = $this->policyParameters;
        }

        if (null !== $this->policySeverity) {
            $res['policy_severity'] = $this->policySeverity;
        }

        if (null !== $this->policyScope) {
            $res['policy_scope'] = $this->policyScope;
        }

        if (null !== $this->policyAction) {
            $res['policy_action'] = $this->policyAction;
        }

        if (null !== $this->created) {
            $res['Created'] = $this->created;
        }

        if (null !== $this->updated) {
            $res['Updated'] = $this->updated;
        }

        if (null !== $this->resourceId) {
            $res['resource_id'] = $this->resourceId;
        }

        if (null !== $this->totalViolations) {
            $res['total_violations'] = $this->totalViolations;
        }

        if (null !== $this->isDeleted) {
            $res['is_deleted'] = $this->isDeleted;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ali_uid'])) {
            $model->aliUid = $map['ali_uid'];
        }

        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }

        if (isset($map['instance_name'])) {
            $model->instanceName = $map['instance_name'];
        }

        if (isset($map['policy_name'])) {
            $model->policyName = $map['policy_name'];
        }

        if (isset($map['policy_category'])) {
            $model->policyCategory = $map['policy_category'];
        }

        if (isset($map['policy_description'])) {
            $model->policyDescription = $map['policy_description'];
        }

        if (isset($map['policy_parameters'])) {
            $model->policyParameters = $map['policy_parameters'];
        }

        if (isset($map['policy_severity'])) {
            $model->policySeverity = $map['policy_severity'];
        }

        if (isset($map['policy_scope'])) {
            $model->policyScope = $map['policy_scope'];
        }

        if (isset($map['policy_action'])) {
            $model->policyAction = $map['policy_action'];
        }

        if (isset($map['Created'])) {
            $model->created = $map['Created'];
        }

        if (isset($map['Updated'])) {
            $model->updated = $map['Updated'];
        }

        if (isset($map['resource_id'])) {
            $model->resourceId = $map['resource_id'];
        }

        if (isset($map['total_violations'])) {
            $model->totalViolations = $map['total_violations'];
        }

        if (isset($map['is_deleted'])) {
            $model->isDeleted = $map['is_deleted'];
        }

        return $model;
    }
}
