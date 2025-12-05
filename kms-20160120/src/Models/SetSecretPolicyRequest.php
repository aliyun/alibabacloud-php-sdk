<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class SetSecretPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $secretName;
    protected $_name = [
        'policy' => 'Policy',
        'policyName' => 'PolicyName',
        'secretName' => 'SecretName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
