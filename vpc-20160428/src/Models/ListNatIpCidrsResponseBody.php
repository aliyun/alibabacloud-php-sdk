<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatIpCidrsResponseBody\natIpCidrs;
use AlibabaCloud\Tea\Model;

class ListNatIpCidrsResponseBody extends Model
{
    /**
     * @var natIpCidrs[]
     */
    public $natIpCidrs;

    /**
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 7479A224-4A28-4895-9604-11F48BCE6A88
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'natIpCidrs' => 'NatIpCidrs',
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
        if (null !== $this->natIpCidrs) {
            $res['NatIpCidrs'] = [];
            if (null !== $this->natIpCidrs && \is_array($this->natIpCidrs)) {
                $n = 0;
                foreach ($this->natIpCidrs as $item) {
                    $res['NatIpCidrs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ListNatIpCidrsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NatIpCidrs'])) {
            if (!empty($map['NatIpCidrs'])) {
                $model->natIpCidrs = [];
                $n                 = 0;
                foreach ($map['NatIpCidrs'] as $item) {
                    $model->natIpCidrs[$n++] = null !== $item ? natIpCidrs::fromMap($item) : $item;
                }
            }
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
