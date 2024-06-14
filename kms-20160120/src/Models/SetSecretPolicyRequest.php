<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class SetSecretPolicyRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example {"Version":"1","Statement": [{"Sid":"kms default secret policy","Effect":"Allow","Principal":{"RAM": ["acs:ram::119285303511****:*"]},"Action":["kms:*"],"Resource": ["*"] }] }
     *
     * @var string
     */
    public $policy;

    /**
     * @example default
     *
     * @var string
     */
    public $policyName;

    /**
     * @description This parameter is required.
     *
     * @example secret_test
     *
     * @var string
     */
    public $secretName;
    protected $_name = [
        'policy'     => 'Policy',
        'policyName' => 'PolicyName',
        'secretName' => 'SecretName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetSecretPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }

        return $model;
    }
}
