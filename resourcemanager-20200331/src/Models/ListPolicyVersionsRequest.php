<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class ListPolicyVersionsRequest extends Model
{
    /**
     * @var string
     */
    public $policyType;

    /**
     * @var string
     */
    public $policyName;
    protected $_name = [
        'policyType' => 'PolicyType',
        'policyName' => 'PolicyName',
    ];

    public function validate()
    {
        Model::validateRequired('policyType', $this->policyType, true);
        Model::validateRequired('policyName', $this->policyName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
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
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        return $model;
    }
}
