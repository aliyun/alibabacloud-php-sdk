<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\ListConditionalAccessPoliciesForNetworkZoneResponseBody\conditionalAccessPolicies;
use AlibabaCloud\Tea\Model;

class ListConditionalAccessPoliciesForNetworkZoneResponseBody extends Model
{
    /**
     * @description Collection of conditional access policies
     *
     * @var conditionalAccessPolicies[]
     */
    public $conditionalAccessPolicies;

    /**
     * @description Request ID.
     *
     * @example 0441BD79-92F3-53AA-8657-F8CE4A2B912A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'conditionalAccessPolicies' => 'ConditionalAccessPolicies',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionalAccessPolicies) {
            $res['ConditionalAccessPolicies'] = [];
            if (null !== $this->conditionalAccessPolicies && \is_array($this->conditionalAccessPolicies)) {
                $n = 0;
                foreach ($this->conditionalAccessPolicies as $item) {
                    $res['ConditionalAccessPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConditionalAccessPoliciesForNetworkZoneResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionalAccessPolicies'])) {
            if (!empty($map['ConditionalAccessPolicies'])) {
                $model->conditionalAccessPolicies = [];
                $n = 0;
                foreach ($map['ConditionalAccessPolicies'] as $item) {
                    $model->conditionalAccessPolicies[$n++] = null !== $item ? conditionalAccessPolicies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
