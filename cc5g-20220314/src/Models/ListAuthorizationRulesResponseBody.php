<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\SDK\CC5G\V20220314\Models\ListAuthorizationRulesResponseBody\authorizationRules;
use AlibabaCloud\Tea\Model;

class ListAuthorizationRulesResponseBody extends Model
{
    /**
     * @var authorizationRules[]
     */
    public $authorizationRules;

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
     * @example 207F9929-806E-5622-8E4F-8484F7000C22
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
        'authorizationRules' => 'AuthorizationRules',
        'maxResults'         => 'MaxResults',
        'nextToken'          => 'NextToken',
        'requestId'          => 'RequestId',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationRules) {
            $res['AuthorizationRules'] = [];
            if (null !== $this->authorizationRules && \is_array($this->authorizationRules)) {
                $n = 0;
                foreach ($this->authorizationRules as $item) {
                    $res['AuthorizationRules'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListAuthorizationRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationRules'])) {
            if (!empty($map['AuthorizationRules'])) {
                $model->authorizationRules = [];
                $n                         = 0;
                foreach ($map['AuthorizationRules'] as $item) {
                    $model->authorizationRules[$n++] = null !== $item ? authorizationRules::fromMap($item) : $item;
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
