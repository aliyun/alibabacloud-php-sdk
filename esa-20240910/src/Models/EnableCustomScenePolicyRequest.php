<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class EnableCustomScenePolicyRequest extends Model
{
    /**
     * @description The policy ID, which can be obtained by calling the [DescribeCustomScenePolicies](https://help.aliyun.com/document_detail/2850508.html) operation.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $policyId;
    protected $_name = [
        'policyId' => 'PolicyId',
    ];

    public function validate() {}

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
     * @return EnableCustomScenePolicyRequest
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
