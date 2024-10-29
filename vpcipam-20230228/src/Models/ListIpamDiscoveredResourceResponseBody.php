<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamDiscoveredResourceResponseBody\ipamDiscoveredResources;
use AlibabaCloud\Tea\Model;

class ListIpamDiscoveredResourceResponseBody extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @var ipamDiscoveredResources[]
     */
    public $ipamDiscoveredResources;

    /**
     * @example 10
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
     * @example 3748DEFF-68BE-5EED-9937-7C1D0C21BAB4
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1000
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'count'                   => 'Count',
        'ipamDiscoveredResources' => 'IpamDiscoveredResources',
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
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->ipamDiscoveredResources) {
            $res['IpamDiscoveredResources'] = [];
            if (null !== $this->ipamDiscoveredResources && \is_array($this->ipamDiscoveredResources)) {
                $n = 0;
                foreach ($this->ipamDiscoveredResources as $item) {
                    $res['IpamDiscoveredResources'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListIpamDiscoveredResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['IpamDiscoveredResources'])) {
            if (!empty($map['IpamDiscoveredResources'])) {
                $model->ipamDiscoveredResources = [];
                $n                              = 0;
                foreach ($map['IpamDiscoveredResources'] as $item) {
                    $model->ipamDiscoveredResources[$n++] = null !== $item ? ipamDiscoveredResources::fromMap($item) : $item;
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
