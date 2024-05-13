<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DeployPolicyInstanceRequest extends Model
{
    /**
     * @description The ID of the master instance.
     *
     * This parameter is required.
     * @example c102fe5f1ee5d4c87a68121a77d8b****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description An array of JSON strings. The JSON strings in the array indicate the IDs of the associated clusters in which the policy instance is deployed.
     *
     * This parameter is required.
     * @var string[]
     */
    public $clusterIds;

    /**
     * @description A list of namespaces.
     *
     * @var string[]
     */
    public $namespaces;

    /**
     * @description The action of the policy. Valid values:
     *
     *   deny: blocks deployments that match the policy.
     *   warn: generates alerts for deployments that match the policy.
     *
     * This parameter is required.
     * @example warn
     *
     * @var string
     */
    public $policyAction;

    /**
     * @description The name of the policy.
     *
     * This parameter is required.
     * @example ACKNoEnvVarSecrets
     *
     * @var string
     */
    public $policyName;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'clusterIds'   => 'ClusterIds',
        'namespaces'   => 'Namespaces',
        'policyAction' => 'PolicyAction',
        'policyName'   => 'PolicyName',
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
        if (null !== $this->clusterIds) {
            $res['ClusterIds'] = $this->clusterIds;
        }
        if (null !== $this->namespaces) {
            $res['Namespaces'] = $this->namespaces;
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
     * @return DeployPolicyInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterIds'])) {
            if (!empty($map['ClusterIds'])) {
                $model->clusterIds = $map['ClusterIds'];
            }
        }
        if (isset($map['Namespaces'])) {
            if (!empty($map['Namespaces'])) {
                $model->namespaces = $map['Namespaces'];
            }
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
