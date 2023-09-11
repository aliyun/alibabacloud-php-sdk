<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models;

use AlibabaCloud\SDK\Nlb\V20220430\Models\ListSystemSecurityPolicyResponseBody\securityPolicies;
use AlibabaCloud\Tea\Model;

class ListSystemSecurityPolicyResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 5C057647-284B-5C67-A07E-4B8F3DABA9F9
     *
     * @var string
     */
    public $requestId;

    /**
     * @description A list of TLS security policies.
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
     * @return ListSystemSecurityPolicyResponseBody
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
