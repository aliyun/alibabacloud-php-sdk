<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeVirtualNodesResponseBody\virtualNodes;

class DescribeVirtualNodesResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var virtualNodes[]
     */
    public $virtualNodes;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'virtualNodes' => 'VirtualNodes',
    ];

    public function validate()
    {
        if (\is_array($this->virtualNodes)) {
            Model::validateArray($this->virtualNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->virtualNodes)) {
                $res['VirtualNodes'] = [];
                $n1 = 0;
                foreach ($this->virtualNodes as $item1) {
                    $res['VirtualNodes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['VirtualNodes'] as $item1) {
                    $model->virtualNodes[$n1++] = virtualNodes::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
