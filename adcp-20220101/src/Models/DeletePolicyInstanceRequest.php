<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DeletePolicyInstanceRequest extends Model
{
    /**
     * @description The ID of the master instance.
     *
     * @example c09946603cd764dac96135f51d1ba****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description A array of JSON strings. The JSON strings in the array indicate the IDs of the associated clusters for which the policy is deleted.
     *
     * @var string[]
     */
    public $clusterIds;

    /**
     * @description The name of the policy.
     *
     * @example ACKNoEnvVarSecrets
     *
     * @var string
     */
    public $policyName;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'clusterIds' => 'ClusterIds',
        'policyName' => 'PolicyName',
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
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePolicyInstanceRequest
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
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        return $model;
    }
}
