<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListSystemSecurityPolicyResponseBody\securityPolicies;

class ListSystemSecurityPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var securityPolicies[]
     */
    public $securityPolicies;
    protected $_name = [
        'requestId' => 'RequestId',
        'securityPolicies' => 'SecurityPolicies',
    ];

    public function validate()
    {
        if (\is_array($this->securityPolicies)) {
            Model::validateArray($this->securityPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityPolicies) {
            if (\is_array($this->securityPolicies)) {
                $res['SecurityPolicies'] = [];
                $n1 = 0;
                foreach ($this->securityPolicies as $item1) {
                    $res['SecurityPolicies'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecurityPolicies'])) {
            if (!empty($map['SecurityPolicies'])) {
                $model->securityPolicies = [];
                $n1 = 0;
                foreach ($map['SecurityPolicies'] as $item1) {
                    $model->securityPolicies[$n1++] = securityPolicies::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
