<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListSystemSecurityPoliciesResponseBody\securityPolicies;
use AlibabaCloud\Tea\Model;

class ListSystemSecurityPoliciesResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The security policies.
     *
     * @var securityPolicies[]
     */
    public $securityPolicies;
    protected $_name = [
        'requestId'        => 'RequestId',
        'securityPolicies' => 'SecurityPolicies',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityPolicies) {
            $res['SecurityPolicies'] = [];
            if (null !== $this->securityPolicies && \is_array($this->securityPolicies)) {
                $n = 0;
                foreach ($this->securityPolicies as $item) {
                    $res['SecurityPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSystemSecurityPoliciesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityPolicies'])) {
            if (!empty($map['SecurityPolicies'])) {
                $model->securityPolicies = [];
                $n                       = 0;
                foreach ($map['SecurityPolicies'] as $item) {
                    $model->securityPolicies[$n++] = null !== $item ? securityPolicies::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
