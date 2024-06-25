<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamPoolsResponseBody\ipamPools;
use AlibabaCloud\Tea\Model;

class ListIpamPoolsResponseBody extends Model
{
    /**
     * @var ipamPools[]
     */
    public $ipamPools;

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
     * @example B54867DE-83DC-56B4-A57E-69A03119D0B1
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
        'ipamPools'  => 'IpamPools',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipamPools) {
            $res['IpamPools'] = [];
            if (null !== $this->ipamPools && \is_array($this->ipamPools)) {
                $n = 0;
                foreach ($this->ipamPools as $item) {
                    $res['IpamPools'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListIpamPoolsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpamPools'])) {
            if (!empty($map['IpamPools'])) {
                $model->ipamPools = [];
                $n                = 0;
                foreach ($map['IpamPools'] as $item) {
                    $model->ipamPools[$n++] = null !== $item ? ipamPools::fromMap($item) : $item;
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
