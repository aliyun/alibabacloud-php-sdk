<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVSwitchCidrReservationsResponseBody\vSwitchCidrReservations;

class ListVSwitchCidrReservationsResponseBody extends Model
{
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

    /**
     * @var vSwitchCidrReservations[]
     */
    public $vSwitchCidrReservations;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'vSwitchCidrReservations' => 'VSwitchCidrReservations',
    ];

    public function validate()
    {
        if (\is_array($this->vSwitchCidrReservations)) {
            Model::validateArray($this->vSwitchCidrReservations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->vSwitchCidrReservations) {
            if (\is_array($this->vSwitchCidrReservations)) {
                $res['VSwitchCidrReservations'] = [];
                $n1 = 0;
                foreach ($this->vSwitchCidrReservations as $item1) {
                    $res['VSwitchCidrReservations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['VSwitchCidrReservations'])) {
            if (!empty($map['VSwitchCidrReservations'])) {
                $model->vSwitchCidrReservations = [];
                $n1 = 0;
                foreach ($map['VSwitchCidrReservations'] as $item1) {
                    $model->vSwitchCidrReservations[$n1++] = vSwitchCidrReservations::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
