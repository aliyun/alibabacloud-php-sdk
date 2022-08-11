<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyInstancesResponse;

use AlibabaCloud\Tea\Model;

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
    protected $_name = [
        'aliUid'            => 'ali_uid',
        'clusterId'         => 'cluster_id',
        'instanceName'      => 'instance_name',
        'policyName'        => 'policy_name',
        'policyCategory'    => 'policy_category',
        'policyDescription' => 'policy_description',
        'policyParameters'  => 'policy_parameters',
        'policySeverity'    => 'policy_severity',
        'policyScope'       => 'policy_scope',
        'policyAction'      => 'policy_action',
    ];

    public function validate()
    {
    }

    public function toMap()
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
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

        return $model;
    }
}
