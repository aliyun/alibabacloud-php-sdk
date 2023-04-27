<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class policies extends Model
{
    /**
     * @example cd0e6882394f7496589837cac3585****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example no-env-var-secrets-****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example warn
     *
     * @var string
     */
    public $policyAction;

    /**
     * @example k8s-general
     *
     * @var string
     */
    public $policyCategory;

    /**
     * @example Restricts secrets used in pod envs
     *
     * @var string
     */
    public $policyDescription;

    /**
     * @example ACKPSPCapabilities
     *
     * @var string
     */
    public $policyName;

    /**
     * @var string[]
     */
    public $policyParameters;

    /**
     * @example *
     *
     * @var string
     */
    public $policyScope;

    /**
     * @example low
     *
     * @var string
     */
    public $policySeverity;

    /**
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
