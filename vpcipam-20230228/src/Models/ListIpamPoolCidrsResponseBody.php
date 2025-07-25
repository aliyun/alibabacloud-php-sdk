<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamPoolCidrsResponseBody\ipamPoolCidrs;
use AlibabaCloud\Tea\Model;

class ListIpamPoolCidrsResponseBody extends Model
{
    /**
     * @description The number of entries returned.
     *
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @description The IDs of IPAM pools.
     *
     * @var ipamPoolCidrs[]
     */
    public $ipamPoolCidrs;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   If **NextToken** is empty, no next page exists.
     *   If a value of **NextToken** is returned, the value indicates the token that is used for the next query.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 9E7CCB95-62E0-534D-9B9A-71F27E8B71B1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 1000
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'count' => 'Count',
        'ipamPoolCidrs' => 'IpamPoolCidrs',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
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
        if (null !== $this->ipamPoolCidrs) {
            $res['IpamPoolCidrs'] = [];
            if (null !== $this->ipamPoolCidrs && \is_array($this->ipamPoolCidrs)) {
                $n = 0;
                foreach ($this->ipamPoolCidrs as $item) {
                    $res['IpamPoolCidrs'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListIpamPoolCidrsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['IpamPoolCidrs'])) {
            if (!empty($map['IpamPoolCidrs'])) {
                $model->ipamPoolCidrs = [];
                $n = 0;
                foreach ($map['IpamPoolCidrs'] as $item) {
                    $model->ipamPoolCidrs[$n++] = null !== $item ? ipamPoolCidrs::fromMap($item) : $item;
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
