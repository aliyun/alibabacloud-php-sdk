<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponseBody\capacityReservationSet;
use AlibabaCloud\Tea\Model;

class DescribeCapacityReservationsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

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
    public $maxResults;

    /**
     * @var capacityReservationSet[]
     */
    public $capacityReservationSet;
    protected $_name = [
        'totalCount'             => 'TotalCount',
        'nextToken'              => 'NextToken',
        'requestId'              => 'RequestId',
        'maxResults'             => 'MaxResults',
        'capacityReservationSet' => 'CapacityReservationSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->capacityReservationSet) {
            $res['CapacityReservationSet'] = [];
            if (null !== $this->capacityReservationSet && \is_array($this->capacityReservationSet)) {
                $n = 0;
                foreach ($this->capacityReservationSet as $item) {
                    $res['CapacityReservationSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCapacityReservationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['CapacityReservationSet'])) {
            if (!empty($map['CapacityReservationSet'])) {
                $model->capacityReservationSet = [];
                $n                             = 0;
                foreach ($map['CapacityReservationSet'] as $item) {
                    $model->capacityReservationSet[$n++] = null !== $item ? capacityReservationSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
