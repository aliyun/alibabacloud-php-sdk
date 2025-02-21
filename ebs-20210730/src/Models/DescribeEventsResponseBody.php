<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEventsResponseBody\resourceEvents;

class DescribeEventsResponseBody extends Model
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
     * @var resourceEvents[]
     */
    public $resourceEvents;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
        'resourceEvents' => 'ResourceEvents',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->resourceEvents)) {
            Model::validateArray($this->resourceEvents);
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

        if (null !== $this->resourceEvents) {
            if (\is_array($this->resourceEvents)) {
                $res['ResourceEvents'] = [];
                $n1                    = 0;
                foreach ($this->resourceEvents as $item1) {
                    $res['ResourceEvents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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

        if (isset($map['ResourceEvents'])) {
            if (!empty($map['ResourceEvents'])) {
                $model->resourceEvents = [];
                $n1                    = 0;
                foreach ($map['ResourceEvents'] as $item1) {
                    $model->resourceEvents[$n1++] = resourceEvents::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
