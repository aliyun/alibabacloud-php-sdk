<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamPoolCidrsResponseBody\ipamPoolCidrs;
use AlibabaCloud\Tea\Model;

class ListIpamPoolCidrsResponseBody extends Model
{
    /**
     * @var ipamPoolCidrs[]
     */
    public $ipamPoolCidrs;

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
     * @example 9E7CCB95-62E0-534D-9B9A-71F27E8B71B1
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
        'ipamPoolCidrs' => 'IpamPoolCidrs',
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'requestId'     => 'RequestId',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['IpamPoolCidrs'])) {
            if (!empty($map['IpamPoolCidrs'])) {
                $model->ipamPoolCidrs = [];
                $n                    = 0;
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
