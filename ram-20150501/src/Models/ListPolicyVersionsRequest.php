<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class ListPolicyVersionsRequest extends Model
{
    /**
     * @description The name of the policy.
     *
     * @example OSS-Administrator
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The type of the policy. Valid values: `System` and `Custom`.
     *
     * @example Custom
     *
     * @var string
     */
    public $policyType;
    protected $_name = [
        'policyName' => 'PolicyName',
        'policyType' => 'PolicyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPolicyVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        return $model;
    }
}
