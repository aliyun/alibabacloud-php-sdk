<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyInstancesResponse;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description The UID of the Alibaba Cloud account that is used to deploy the policy instance.
     *
     * @example 16298168****
     *
     * @var string
     */
    public $aliUid;

    /**
     * @description The ID of the cluster.
     *
     * @example c8155823d057948c69a****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the policy instance.
     *
     * @example no-env-var-secrets-****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The name of the policy.
     *
     * @example ACKPSPCapabilities
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The type of policy.
     *
     * @example k8s-general
     *
     * @var string
     */
    public $policyCategory;

    /**
     * @description The description of the policy template.
     *
     * @example Restricts secrets used in pod envs
     *
     * @var string
     */
    public $policyDescription;

    /**
     * @description The parameters of the policy instance.
     *
     * @example "restrictedNamespaces": [ "test" ]
     *
     * @var string
     */
    public $policyParameters;

    /**
     * @description The severity level of the policy instance.
     *
     * @example low
     *
     * @var string
     */
    public $policySeverity;

    /**
     * @description The applicable scope of the policy instance.
     *
     * A value of \* indicates all namespaces in the cluster. This is the default value.
     *
     * Multiple namespaces are separated by commas (,).
     * @example *
     *
     * @var string
     */
    public $policyScope;

    /**
     * @description The action of the policy. Valid values:
     *
     *   `deny`: Deployments that match the policy are denied.
     *   `warn`: Alerts are generated for deployments that match the policy.
     *
     * @example deny
     *
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
