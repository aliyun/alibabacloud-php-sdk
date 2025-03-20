<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\ListConditionalAccessPoliciesResponseBody\conditionalAccessPolicies;
use AlibabaCloud\Tea\Model;

class ListConditionalAccessPoliciesResponseBody extends Model
{
    /**
     * @description Collection of conditional access policies
     *
     * @var conditionalAccessPolicies[]
     */
    public $conditionalAccessPolicies;

    /**
     * @description The token value returned by this call for the next page query.
     *
     * @example NTxxxexample
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Previous page query token (Token)
     *
     * @example PTxxxxxexample
     *
     * @var string
     */
    public $previousToken;

    /**
     * @description Request ID.
     *
     * @example 0441BD79-92F3-53AA-8657-F8CE4A2B912A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Total number of items in the list.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'conditionalAccessPolicies' => 'ConditionalAccessPolicies',
        'nextToken' => 'NextToken',
        'previousToken' => 'PreviousToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
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
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->previousToken) {
            $res['PreviousToken'] = $this->previousToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConditionalAccessPoliciesResponseBody
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PreviousToken'])) {
            $model->previousToken = $map['PreviousToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
