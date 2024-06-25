<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamPoolAllocationsResponseBody\ipamPoolAllocations;
use AlibabaCloud\Tea\Model;

class ListIpamPoolAllocationsResponseBody extends Model
{
    /**
     * @var ipamPoolAllocations[]
     */
    public $ipamPoolAllocations;

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
        'ipamPoolAllocations' => 'IpamPoolAllocations',
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
        'requestId'           => 'RequestId',
        'totalCount'          => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipamPoolAllocations) {
            $res['IpamPoolAllocations'] = [];
            if (null !== $this->ipamPoolAllocations && \is_array($this->ipamPoolAllocations)) {
                $n = 0;
                foreach ($this->ipamPoolAllocations as $item) {
                    $res['IpamPoolAllocations'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListIpamPoolAllocationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpamPoolAllocations'])) {
            if (!empty($map['IpamPoolAllocations'])) {
                $model->ipamPoolAllocations = [];
                $n                          = 0;
                foreach ($map['IpamPoolAllocations'] as $item) {
                    $model->ipamPoolAllocations[$n++] = null !== $item ? ipamPoolAllocations::fromMap($item) : $item;
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
