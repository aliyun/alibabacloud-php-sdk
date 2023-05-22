<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DeployPolicyInstanceShrinkRequest extends Model
{
    /**
     * @description The ID of the master instance.
     *
     * @example c102fe5f1ee5d4c87a68121a77d8b****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description An array of JSON strings. The JSON strings in the array indicate the IDs of the associated clusters in which the policy instance is deployed.
     *
     * @var string
     */
    public $clusterIdsShrink;

    /**
     * @description A list of namespaces.
     *
     * @var string
     */
    public $namespacesShrink;

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
     * @description The name of the policy.
     *
     * @example ACKNoEnvVarSecrets
     *
     * @var string
     */
    public $policyName;
    protected $_name = [
        'clusterId'        => 'ClusterId',
        'clusterIdsShrink' => 'ClusterIds',
        'namespacesShrink' => 'Namespaces',
        'policyAction'     => 'PolicyAction',
        'policyName'       => 'PolicyName',
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
        if (null !== $this->clusterIdsShrink) {
            $res['ClusterIds'] = $this->clusterIdsShrink;
        }
        if (null !== $this->namespacesShrink) {
            $res['Namespaces'] = $this->namespacesShrink;
        }
        if (null !== $this->policyAction) {
            $res['PolicyAction'] = $this->policyAction;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeployPolicyInstanceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterIds'])) {
            $model->clusterIdsShrink = $map['ClusterIds'];
        }
        if (isset($map['Namespaces'])) {
            $model->namespacesShrink = $map['Namespaces'];
        }
        if (isset($map['PolicyAction'])) {
            $model->policyAction = $map['PolicyAction'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        return $model;
    }
}
