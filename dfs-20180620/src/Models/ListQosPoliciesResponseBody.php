<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\SDK\DFS\V20180620\Models\ListQosPoliciesResponseBody\qosPolicies;
use AlibabaCloud\Tea\Model;

class ListQosPoliciesResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var qosPolicies[]
     */
    public $qosPolicies;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'qosPolicies' => 'QosPolicies',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->qosPolicies) {
            $res['QosPolicies'] = [];
            if (null !== $this->qosPolicies && \is_array($this->qosPolicies)) {
                $n = 0;
                foreach ($this->qosPolicies as $item) {
                    $res['QosPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListQosPoliciesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['QosPolicies'])) {
            if (!empty($map['QosPolicies'])) {
                $model->qosPolicies = [];
                $n = 0;
                foreach ($map['QosPolicies'] as $item) {
                    $model->qosPolicies[$n++] = null !== $item ? qosPolicies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
