<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\CreatePolicyResponseBody\policy;
use AlibabaCloud\Tea\Model;

class CreatePolicyResponseBody extends Model
{
    /**
     * @description The information about the policy.
     *
     * @var policy
     */
    public $policy;

    /**
     * @description The ID of the request.
     *
     * @example BA34C54A-C2B1-5A65-B6B0-B5842C1DB4DA
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
            $res['Policy'] = null !== $this->policy ? $this->policy->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Policy'])) {
            $model->policy = policy::fromMap($map['Policy']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
