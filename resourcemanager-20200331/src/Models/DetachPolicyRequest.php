<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class DetachPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $policyType;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $principalType;

    /**
     * @var string
     */
    public $principalName;
    protected $_name = [
        'resourceGroupId' => 'ResourceGroupId',
        'policyType'      => 'PolicyType',
        'policyName'      => 'PolicyName',
        'principalType'   => 'PrincipalType',
        'principalName'   => 'PrincipalName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->principalType) {
            $res['PrincipalType'] = $this->principalType;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PrincipalType'])) {
            $model->principalType = $map['PrincipalType'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }

        return $model;
    }
}
