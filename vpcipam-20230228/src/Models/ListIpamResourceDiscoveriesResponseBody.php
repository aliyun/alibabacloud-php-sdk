<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamResourceDiscoveriesResponseBody\ipamResourceDiscoveries;
use AlibabaCloud\Tea\Model;

class ListIpamResourceDiscoveriesResponseBody extends Model
{
    /**
     * @description The maximum number of entries on each page.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The list of resource discovery instances.
     *
     * @var ipamResourceDiscoveries[]
     */
    public $ipamResourceDiscoveries;

    /**
     * @description The maximum number of entries on each page. Valid values: 1 to 100. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   If **NextToken** is empty, there is no next page.
     *   If a value of **NextToken** is returned, it indicates the token that is used for the next query.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 86137597-443F-5B66-B9B6-8514E0C50B8F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'count' => 'Count',
        'ipamResourceDiscoveries' => 'IpamResourceDiscoveries',
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
        if (null !== $this->ipamResourceDiscoveries) {
            $res['IpamResourceDiscoveries'] = [];
            if (null !== $this->ipamResourceDiscoveries && \is_array($this->ipamResourceDiscoveries)) {
                $n = 0;
                foreach ($this->ipamResourceDiscoveries as $item) {
                    $res['IpamResourceDiscoveries'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListIpamResourceDiscoveriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['IpamResourceDiscoveries'])) {
            if (!empty($map['IpamResourceDiscoveries'])) {
                $model->ipamResourceDiscoveries = [];
                $n = 0;
                foreach ($map['IpamResourceDiscoveries'] as $item) {
                    $model->ipamResourceDiscoveries[$n++] = null !== $item ? ipamResourceDiscoveries::fromMap($item) : $item;
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
