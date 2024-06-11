<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class CreatePolicyRequest extends Model
{
    /**
     * @description The description of the policy.
     *
     * The description must be 1 to 1,024 characters in length.
     * @example Query ECS instances in a specific region
     *
     * @var string
     */
    public $description;

    /**
     * @description The document of the policy.
     *
     * For more information about policy elements and sample policies, see [Policy elements](https://help.aliyun.com/document_detail/93738.html) and [Overview of sample policies](https://help.aliyun.com/document_detail/210969.html).
     * @example {"Statement": [{"Effect": "Allow","Action": "ecs:Describe*","Resource": "acs:ecs:cn-qingdao:*:instance/*"}],"Version": "1"}
     *
     * @var string
     */
    public $policyDocument;

    /**
     * @description The name of the policy.
     *
     * The name must be 1 to 128 characters in length, and can contain letters, digits, and hyphens (-).
     * @example View-ECS-instances-in-a-specific-region
     *
     * @var string
     */
    public $policyName;
    protected $_name = [
        'description'    => 'Description',
        'policyDocument' => 'PolicyDocument',
        'policyName'     => 'PolicyName',
    ];

    public function validate()
    {
    }

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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePolicyRequest
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

        return $model;
    }
}
