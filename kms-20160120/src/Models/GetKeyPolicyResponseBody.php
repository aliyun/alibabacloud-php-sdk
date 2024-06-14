<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class GetKeyPolicyResponseBody extends Model
{
    /**
     * @example {"Statement": [{"Action": ["kms:*"],"Effect": "Allow","Principal": {"RAM": ["acs:ram::190325303126****:*","acs:ram::119285303511****:*"]},"Resource": ["*"],"Sid": "kms default key policy"}],"Version": "1" }
     *
     * @var string
     */
    public $policy;

    /**
     * @example 381D5D33-BB8F-395F-8EE4-AE3B84B523C8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'policy'    => 'Policy',
        'requestId' => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetKeyPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
