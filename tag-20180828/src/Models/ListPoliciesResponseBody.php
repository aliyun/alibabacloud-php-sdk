<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\SDK\Tag\V20180828\Models\ListPoliciesResponseBody\policyList;
use AlibabaCloud\Tea\Model;

class ListPoliciesResponseBody extends Model
{
    /**
     * @description Indicates whether the next query is required.
     *
     *   If the value of this parameter is empty (`"NextToken": ""`), all results are returned, and the next query is not required.
     *   If the value of this parameter is not empty, the next query is required, and the value is the token used to start the next query.
     *
     * @example caeba0bbb2be03f84eb48b699f0a****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The tag policies.
     *
     * @var policyList[]
     */
    public $policyList;

    /**
     * @description The ID of the request.
     *
     * @example 72477CFF-5B24-5E30-9861-3DD9C4BD46E5
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken'  => 'NextToken',
        'policyList' => 'PolicyList',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->policyList) {
            $res['PolicyList'] = [];
            if (null !== $this->policyList && \is_array($this->policyList)) {
                $n = 0;
                foreach ($this->policyList as $item) {
                    $res['PolicyList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListPoliciesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PolicyList'])) {
            if (!empty($map['PolicyList'])) {
                $model->policyList = [];
                $n                 = 0;
                foreach ($map['PolicyList'] as $item) {
                    $model->policyList[$n++] = null !== $item ? policyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
