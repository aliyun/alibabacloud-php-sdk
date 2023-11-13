<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DeleteSceneDefensePolicyRequest extends Model
{
    /**
     * @description The ID of the policy that you want to delete.
     *
     * > You can call the [DescribeSceneDefensePolicies](~~159382~~) operation to query the IDs of all policies.
     * @example 321a-fd31-df51-****
     *
     * @var string
     */
    public $policyId;
    protected $_name = [
        'policyId' => 'PolicyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSceneDefensePolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        return $model;
    }
}
