<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class DetachPolicyRequest extends Model
{
    /**
     * @example OSS-Administrator
     *
     * @var string
     */
    public $policyName;

    /**
     * @example Custom
     *
     * @var string
     */
    public $policyType;

    /**
     * @example alice@demo.onaliyun.com
     *
     * @var string
     */
    public $principalName;

    /**
     * @example IMSUser
     *
     * @var string
     */
    public $principalType;

    /**
     * @example rg-9gLOoK****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'policyName'      => 'PolicyName',
        'policyType'      => 'PolicyType',
        'principalName'   => 'PrincipalName',
        'principalType'   => 'PrincipalType',
        'resourceGroupId' => 'ResourceGroupId',
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
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->principalType) {
            $res['PrincipalType'] = $this->principalType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['PrincipalType'])) {
            $model->principalType = $map['PrincipalType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
