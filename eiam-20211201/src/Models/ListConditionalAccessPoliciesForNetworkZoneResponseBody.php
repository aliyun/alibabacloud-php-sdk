<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListConditionalAccessPoliciesForNetworkZoneResponseBody\conditionalAccessPolicies;

class ListConditionalAccessPoliciesForNetworkZoneResponseBody extends Model
{
    /**
     * @var conditionalAccessPolicies[]
     */
    public $conditionalAccessPolicies;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'conditionalAccessPolicies' => 'ConditionalAccessPolicies',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->conditionalAccessPolicies)) {
            Model::validateArray($this->conditionalAccessPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditionalAccessPolicies) {
            if (\is_array($this->conditionalAccessPolicies)) {
                $res['ConditionalAccessPolicies'] = [];
                $n1 = 0;
                foreach ($this->conditionalAccessPolicies as $item1) {
                    $res['ConditionalAccessPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ConditionalAccessPolicies'])) {
            if (!empty($map['ConditionalAccessPolicies'])) {
                $model->conditionalAccessPolicies = [];
                $n1 = 0;
                foreach ($map['ConditionalAccessPolicies'] as $item1) {
                    $model->conditionalAccessPolicies[$n1] = conditionalAccessPolicies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
