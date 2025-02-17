<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponseBody\capacityReservationSet;

class DescribeCapacityReservationsResponseBody extends Model
{
    /**
     * @var capacityReservationSet
     */
    public $capacityReservationSet;
    /**
     * @var int
     */
    public $maxResults;
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
    protected $_name = [
        'capacityReservationSet' => 'CapacityReservationSet',
        'maxResults'             => 'MaxResults',
        'nextToken'              => 'NextToken',
        'requestId'              => 'RequestId',
        'totalCount'             => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->capacityReservationSet) {
            $this->capacityReservationSet->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacityReservationSet) {
            $res['CapacityReservationSet'] = null !== $this->capacityReservationSet ? $this->capacityReservationSet->toArray($noStream) : $this->capacityReservationSet;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CapacityReservationSet'])) {
            $model->capacityReservationSet = capacityReservationSet::fromMap($map['CapacityReservationSet']);
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
