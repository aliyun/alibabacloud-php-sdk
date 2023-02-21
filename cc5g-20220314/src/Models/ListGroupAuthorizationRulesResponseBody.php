<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\SDK\CC5G\V20220314\Models\ListGroupAuthorizationRulesResponseBody\groupAuthorizationRules;
use AlibabaCloud\Tea\Model;

class ListGroupAuthorizationRulesResponseBody extends Model
{
    /**
     * @var groupAuthorizationRules[]
     */
    public $groupAuthorizationRules;

    /**
     * @example 10
     *
     * @var string
     */
    public $maxResults;

    /**
     * @example iou001238joojjaere
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'groupAuthorizationRules' => 'GroupAuthorizationRules',
        'maxResults'              => 'MaxResults',
        'nextToken'               => 'NextToken',
        'requestId'               => 'RequestId',
        'totalCount'              => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupAuthorizationRules) {
            $res['GroupAuthorizationRules'] = [];
            if (null !== $this->groupAuthorizationRules && \is_array($this->groupAuthorizationRules)) {
                $n = 0;
                foreach ($this->groupAuthorizationRules as $item) {
                    $res['GroupAuthorizationRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
     * @return ListGroupAuthorizationRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupAuthorizationRules'])) {
            if (!empty($map['GroupAuthorizationRules'])) {
                $model->groupAuthorizationRules = [];
                $n                              = 0;
                foreach ($map['GroupAuthorizationRules'] as $item) {
                    $model->groupAuthorizationRules[$n++] = null !== $item ? groupAuthorizationRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
