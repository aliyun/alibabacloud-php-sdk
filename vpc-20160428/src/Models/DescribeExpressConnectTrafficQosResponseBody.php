<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressConnectTrafficQosResponseBody\qosList;
use AlibabaCloud\Tea\Model;

class DescribeExpressConnectTrafficQosResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $count;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var qosList[]
     */
    public $qosList;

    /**
     * @example 4CF20CC7-D1FC-425B-A15B-DF7C8E2131A7
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'count'      => 'Count',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'qosList'    => 'QosList',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->qosList) {
            $res['QosList'] = [];
            if (null !== $this->qosList && \is_array($this->qosList)) {
                $n = 0;
                foreach ($this->qosList as $item) {
                    $res['QosList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeExpressConnectTrafficQosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['QosList'])) {
            if (!empty($map['QosList'])) {
                $model->qosList = [];
                $n              = 0;
                foreach ($map['QosList'] as $item) {
                    $model->qosList[$n++] = null !== $item ? qosList::fromMap($item) : $item;
                }
            }
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
