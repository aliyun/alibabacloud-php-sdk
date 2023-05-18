<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class CreatePolicyVersionRequest extends Model
{
    /**
     * @description The document of the policy.
     *
     * The document must be 1 to 2,048 characters in length.
     * @example { "Statement": [{ "Action": ["oss:*"], "Effect": "Allow", "Resource": ["acs:oss:*:*:*"]}], "Version": "1"}
     *
     * @var string
     */
    public $policyDocument;

    /**
     * @description The name of the policy.
     *
     * The name must be 1 to 128 characters in length and can contain letters, digits, and hyphens (-).
     * @example OSS-Administrator
     *
     * @var string
     */
    public $policyName;

    /**
     * @description Specifies whether to set the policy version as the default version. Valid values:
     *
     *   false: The policy version is not set as the default version.
     *   true: The policy version is set as the default version.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $setAsDefault;
    protected $_name = [
        'policyDocument' => 'PolicyDocument',
        'policyName'     => 'PolicyName',
        'setAsDefault'   => 'SetAsDefault',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyDocument) {
            $res['PolicyDocument'] = $this->policyDocument;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->setAsDefault) {
            $res['SetAsDefault'] = $this->setAsDefault;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePolicyVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyDocument'])) {
            $model->policyDocument = $map['PolicyDocument'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['SetAsDefault'])) {
            $model->setAsDefault = $map['SetAsDefault'];
        }

        return $model;
    }
}
