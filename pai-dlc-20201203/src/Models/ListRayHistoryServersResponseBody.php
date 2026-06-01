<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListRayHistoryServersResponseBody\rayHistoryServers;

class ListRayHistoryServersResponseBody extends Model
{
    /**
     * @var rayHistoryServers[]
     */
    public $rayHistoryServers;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'rayHistoryServers' => 'RayHistoryServers',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->rayHistoryServers)) {
            Model::validateArray($this->rayHistoryServers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rayHistoryServers) {
            if (\is_array($this->rayHistoryServers)) {
                $res['RayHistoryServers'] = [];
                $n1 = 0;
                foreach ($this->rayHistoryServers as $item1) {
                    $res['RayHistoryServers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['RayHistoryServers'])) {
            if (!empty($map['RayHistoryServers'])) {
                $model->rayHistoryServers = [];
                $n1 = 0;
                foreach ($map['RayHistoryServers'] as $item1) {
                    $model->rayHistoryServers[$n1] = rayHistoryServers::fromMap($item1);
                    ++$n1;
                }
            }
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
