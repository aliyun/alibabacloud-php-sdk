<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class policies extends Model
{
    /**
     * @description The ID of the associated cluster.
     *
     * @example cd0e6882394f7496589837cac3585****
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
     * @description The action of the policy. Valid values:
     *
     *   deny: blocks deployments that match the policy.
     *   warn: generates alerts for deployments that match the policy.
     *
     * @example warn
     *
     * @var string
     */
    public $policyAction;

    /**
     * @description The type of the policy.
     *
     * @example k8s-general
     *
     * @var string
     */
    public $policyCategory;

    /**
     * @description The description of the policy.
     *
     * @example Restricts secrets used in pod envs
     *
     * @var string
     */
    public $policyDescription;

    /**
     * @description The name of the policy.
     *
     * @example ACKPSPCapabilities
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The parameters of the policy instance.
     *
     * @var string[]
     */
    public $policyParameters;

    /**
     * @description The applicable scope of the policy instance.
     *
     * A value of \\* indicates all namespaces. This is the default value.
     *
     * Multiple namespaces are separated by commas (,).
     * @example *
     *
     * @var string
     */
    public $policyScope;

    /**
     * @description The severity level of the policy.
     *
     * @example low
     *
     * @var string
     */
    public $policySeverity;

    /**
     * @description The total number of deployments that match the policy in the associated cluster, including the deployments that are blocked and the deployments that have triggered alerting.
     *
     * @example 2
     *
     * @var int
     */
    public $totalViolations;
    protected $_name = [
        'clusterId'         => 'ClusterId',
        'instanceName'      => 'InstanceName',
        'policyAction'      => 'PolicyAction',
        'policyCategory'    => 'PolicyCategory',
        'policyDescription' => 'PolicyDescription',
        'policyName'        => 'PolicyName',
        'policyParameters'  => 'PolicyParameters',
        'policyScope'       => 'PolicyScope',
        'policySeverity'    => 'PolicySeverity',
        'totalViolations'   => 'TotalViolations',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->policyAction) {
            $res['PolicyAction'] = $this->policyAction;
        }
        if (null !== $this->policyCategory) {
            $res['PolicyCategory'] = $this->policyCategory;
        }
        if (null !== $this->policyDescription) {
            $res['PolicyDescription'] = $this->policyDescription;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policyParameters) {
            $res['PolicyParameters'] = $this->policyParameters;
        }
        if (null !== $this->policyScope) {
            $res['PolicyScope'] = $this->policyScope;
        }
        if (null !== $this->policySeverity) {
            $res['PolicySeverity'] = $this->policySeverity;
        }
        if (null !== $this->totalViolations) {
            $res['TotalViolations'] = $this->totalViolations;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['PolicyAction'])) {
            $model->policyAction = $map['PolicyAction'];
        }
        if (isset($map['PolicyCategory'])) {
            $model->policyCategory = $map['PolicyCategory'];
        }
        if (isset($map['PolicyDescription'])) {
            $model->policyDescription = $map['PolicyDescription'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicyParameters'])) {
            $model->policyParameters = $map['PolicyParameters'];
        }
        if (isset($map['PolicyScope'])) {
            $model->policyScope = $map['PolicyScope'];
        }
        if (isset($map['PolicySeverity'])) {
            $model->policySeverity = $map['PolicySeverity'];
        }
        if (isset($map['TotalViolations'])) {
            $model->totalViolations = $map['TotalViolations'];
        }

        return $model;
    }
}
