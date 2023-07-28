<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class GenerateExecutionPolicyResponseBody extends Model
{
    /**
     * @description The policies that are missing.
     *
     * @example [{\"Action\": [\"ecs:DescribeInvocationResults\", \"ecs:DescribeInstances\", \"ecs:RunCommand\", \"ecs:DescribeInvocations\"], \"ServiceName\": \"ecs\", \"Resources\": \"*\"}]
     *
     * @var string
     */
    public $missingPolicy;

    /**
     * @description The RAM policy.
     *
     * @example {}
     *
     * @var string
     */
    public $policy;

    /**
     * @description The ID of the request.
     *
     * @example 14A07460-EBE7-47CA-9757-12CC4761D47A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'missingPolicy' => 'MissingPolicy',
        'policy'        => 'Policy',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->missingPolicy) {
            $res['MissingPolicy'] = $this->missingPolicy;
        }
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
     * @return GenerateExecutionPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MissingPolicy'])) {
            $model->missingPolicy = $map['MissingPolicy'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
