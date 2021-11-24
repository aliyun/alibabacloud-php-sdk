<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListForwardingRulesResponseBody\forwardingRules;
use AlibabaCloud\Tea\Model;

class ListForwardingRulesResponseBody extends Model
{
    /**
     * @var forwardingRules[]
     */
    public $forwardingRules;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'forwardingRules' => 'ForwardingRules',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forwardingRules) {
            $res['ForwardingRules'] = [];
            if (null !== $this->forwardingRules && \is_array($this->forwardingRules)) {
                $n = 0;
                foreach ($this->forwardingRules as $item) {
                    $res['ForwardingRules'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListForwardingRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForwardingRules'])) {
            if (!empty($map['ForwardingRules'])) {
                $model->forwardingRules = [];
                $n                      = 0;
                foreach ($map['ForwardingRules'] as $item) {
                    $model->forwardingRules[$n++] = null !== $item ? forwardingRules::fromMap($item) : $item;
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
