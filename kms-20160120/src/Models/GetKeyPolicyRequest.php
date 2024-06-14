<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class GetKeyPolicyRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example key-hzz630494463ejqjx****
     *
     * @var string
     */
    public $keyId;

    /**
     * @example default
     *
     * @var string
     */
    public $policyName;
    protected $_name = [
        'keyId'      => 'KeyId',
        'policyName' => 'PolicyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetKeyPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        return $model;
    }
}
