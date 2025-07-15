<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressConnectTrafficQosResponseBody\qosList;
use AlibabaCloud\Tea\Model;

class DescribeExpressConnectTrafficQosResponseBody extends Model
{
    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var string
     */
    public $count;

    /**
     * @description The number of entries per page. Valid values: **1 to 100**. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results.
     *
     *   If **NextToken** is empty, no next page exists.
     *   If a value is returned for **NextToken**, the value can be used in the next request to retrieve a new page of results.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The information about QoS policies.
     *
     * @var qosList[]
     */
    public $qosList;

    /**
     * @description The request ID.
     *
     * @example 4CF20CC7-D1FC-425B-A15B-DF7C8E2131A7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of returned entries.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'count' => 'Count',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'qosList' => 'QosList',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

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
                $n = 0;
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
