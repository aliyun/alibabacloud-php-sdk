<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListPoliciesResponseBody;

use AlibabaCloud\Tea\Model;

class policies extends Model
{
    /**
     * @description Permission policy description.
     *
     * @example Only read permission policy
     *
     * @var string
     */
    public $description;

    /**
     * @description Policy content.
     *
     * @example {"Action":["*:Describe*","*:List*","*:Get*","*:BatchGet*","*:Query*","*:BatchQuery*","actiontrail:LookupEvents"],"Resource":["*"],"Effect":"Allow"}
     *
     * @var string
     */
    public $policyDocument;

    /**
     * @description Permission policy name.
     *
     * @example AliyunComputeNestPolicyForReadOnly
     *
     * @var string
     */
    public $policyName;

    /**
     * @description Permission policy type.
     *
     * - Custom: Custom policy.
     * - System: System policy.
     *
     * @example System
     *
     * @var string
     */
    public $policyType;
    protected $_name = [
        'description' => 'Description',
        'policyDocument' => 'PolicyDocument',
        'policyName' => 'PolicyName',
        'policyType' => 'PolicyType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->policyDocument) {
            $res['PolicyDocument'] = $this->policyDocument;
        }
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
     * @return policies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['PolicyDocument'])) {
            $model->policyDocument = $map['PolicyDocument'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        return $model;
    }
}
