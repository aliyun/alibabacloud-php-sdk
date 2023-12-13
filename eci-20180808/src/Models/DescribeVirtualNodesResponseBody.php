<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeVirtualNodesResponseBody\virtualNodes;
use AlibabaCloud\Tea\Model;

class DescribeVirtualNodesResponseBody extends Model
{
    /**
     * @description The token that determines the start point of the next query.
     *
     * @example d78f2dd8-5979-42fe-****-b16db43be5bc
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 9C9B9917-ED22-50D5-ADE6-9FA9D58AD05F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of virtual nodes that were queried.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The virtual nodes that were queried.
     *
     * @var virtualNodes[]
     */
    public $virtualNodes;
    protected $_name = [
        'nextToken'    => 'NextToken',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
        'virtualNodes' => 'VirtualNodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->virtualNodes) {
            $res['VirtualNodes'] = [];
            if (null !== $this->virtualNodes && \is_array($this->virtualNodes)) {
                $n = 0;
                foreach ($this->virtualNodes as $item) {
                    $res['VirtualNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVirtualNodesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['VirtualNodes'])) {
            if (!empty($map['VirtualNodes'])) {
                $model->virtualNodes = [];
                $n                   = 0;
                foreach ($map['VirtualNodes'] as $item) {
                    $model->virtualNodes[$n++] = null !== $item ? virtualNodes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
