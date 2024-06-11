<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class CreatePolicyVersionRequest extends Model
{
    /**
     * @description The document of the policy. The document can be up to 6,144 bytes in length.
     *
     * @example {"Statement":[{"Action":["oss:*"],"Effect":"Allow","Resource":["acs:oss:*:*:*"]}],"Version":"1"}
     *
     * @var string
     */
    public $policyDocument;

    /**
     * @description The name of the policy.
     *
     * @example OSS-Administrator
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The rotation strategy of the policy. The rotation strategy can be used to delete an early policy version.
     *
     * Valid values:
     *
     *   `None`: disables the rotation strategy.
     *   `DeleteOldestNonDefaultVersionWhenLimitExceeded`: deletes the earliest non-active version if the number of versions exceeds the limit.
     *
     * Default value: `None`.
     * @example None
     *
     * @var string
     */
    public $rotateStrategy;

    /**
     * @description Specifies whether to set this policy as the default policy. Default value: `false`.
     *
     * @example false
     *
     * @var bool
     */
    public $setAsDefault;
    protected $_name = [
        'policyDocument' => 'PolicyDocument',
        'policyName'     => 'PolicyName',
        'rotateStrategy' => 'RotateStrategy',
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
        if (null !== $this->rotateStrategy) {
            $res['RotateStrategy'] = $this->rotateStrategy;
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
        if (isset($map['RotateStrategy'])) {
            $model->rotateStrategy = $map['RotateStrategy'];
        }
        if (isset($map['SetAsDefault'])) {
            $model->setAsDefault = $map['SetAsDefault'];
        }

        return $model;
    }
}
