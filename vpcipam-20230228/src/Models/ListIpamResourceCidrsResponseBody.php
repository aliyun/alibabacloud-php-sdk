<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamResourceCidrsResponseBody\ipamResourceCidrs;
use AlibabaCloud\Tea\Model;

class ListIpamResourceCidrsResponseBody extends Model
{
    /**
     * @var ipamResourceCidrs[]
     */
    public $ipamResourceCidrs;

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
     * @example 49A9DE56-B68C-5FFC-BC06-509D086F287C
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
        'ipamResourceCidrs' => 'IpamResourceCidrs',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'requestId'         => 'RequestId',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipamResourceCidrs) {
            $res['IpamResourceCidrs'] = [];
            if (null !== $this->ipamResourceCidrs && \is_array($this->ipamResourceCidrs)) {
                $n = 0;
                foreach ($this->ipamResourceCidrs as $item) {
                    $res['IpamResourceCidrs'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListIpamResourceCidrsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpamResourceCidrs'])) {
            if (!empty($map['IpamResourceCidrs'])) {
                $model->ipamResourceCidrs = [];
                $n                        = 0;
                foreach ($map['IpamResourceCidrs'] as $item) {
                    $model->ipamResourceCidrs[$n++] = null !== $item ? ipamResourceCidrs::fromMap($item) : $item;
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
