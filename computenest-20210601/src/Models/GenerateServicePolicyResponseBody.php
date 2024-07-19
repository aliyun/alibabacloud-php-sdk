<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GenerateServicePolicyResponseBody\missingPolicy;
use AlibabaCloud\Tea\Model;

class GenerateServicePolicyResponseBody extends Model
{
    /**
     * @description The policies that are missing.
     *
     * @var missingPolicy[]
     */
    public $missingPolicy;

    /**
     * @description The RAM policy.
     *
     * @example {Statement": [{ "Action": ["oos:*"], "Effect": "Allow", "Resource": "*"},{ "Action": ["ecs:DescribeInstances"], "Effect": "Allow", "Resource": "*"},{ "Action": ["ecs:RunInstance"], "Effect": "Allow", "Resource": "*"}], "Version": "1"}
     *
     * @var string
     */
    public $policy;

    /**
     * @description The request ID.
     *
     * @example 5040BE9E-8DA2-5C9D-9B70-0EE6027A14BC
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
            $res['MissingPolicy'] = [];
            if (null !== $this->missingPolicy && \is_array($this->missingPolicy)) {
                $n = 0;
                foreach ($this->missingPolicy as $item) {
                    $res['MissingPolicy'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return GenerateServicePolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MissingPolicy'])) {
            if (!empty($map['MissingPolicy'])) {
                $model->missingPolicy = [];
                $n                    = 0;
                foreach ($map['MissingPolicy'] as $item) {
                    $model->missingPolicy[$n++] = null !== $item ? missingPolicy::fromMap($item) : $item;
                }
            }
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
