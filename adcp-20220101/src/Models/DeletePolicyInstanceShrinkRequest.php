<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DeletePolicyInstanceShrinkRequest extends Model
{
    /**
     * @description The ID of the master instance.
     *
     * This parameter is required.
     * @example c09946603cd764dac96135f51d1ba****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description A array of JSON strings. The JSON strings in the array indicate the IDs of the associated clusters for which the policy is deleted.
     *
     * @var string
     */
    public $clusterIdsShrink;

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
        'clusterId'        => 'ClusterId',
        'clusterIdsShrink' => 'ClusterIds',
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
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePolicyInstanceShrinkRequest
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
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        return $model;
    }
}
