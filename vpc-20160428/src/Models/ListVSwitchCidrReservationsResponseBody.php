<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVSwitchCidrReservationsResponseBody\vSwitchCidrReservations;
use AlibabaCloud\Tea\Model;

class ListVSwitchCidrReservationsResponseBody extends Model
{
    /**
     * @description The number of entries to return per page.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The returned value of NextToken is a pagination token, which can be used in the next request to retrieve a new page of results. Valid values:
     *
     *   If **NextToken** is empty, no next page exists.
     *   If a value is returned for **NextToken**, the value is the token that determines the start point of the next query.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 54B48E3D-DF70-471B-AA93-08E683A1B45
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description A list of reserved CIDR blocks.
     *
     * @var vSwitchCidrReservations[]
     */
    public $vSwitchCidrReservations;
    protected $_name = [
        'maxResults'              => 'MaxResults',
        'nextToken'               => 'NextToken',
        'requestId'               => 'RequestId',
        'totalCount'              => 'TotalCount',
        'vSwitchCidrReservations' => 'VSwitchCidrReservations',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['VSwitchCidrReservations'] = [];
            if (null !== $this->vSwitchCidrReservations && \is_array($this->vSwitchCidrReservations)) {
                $n = 0;
                foreach ($this->vSwitchCidrReservations as $item) {
                    $res['VSwitchCidrReservations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVSwitchCidrReservationsResponseBody
     */
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
                $n                              = 0;
                foreach ($map['VSwitchCidrReservations'] as $item) {
                    $model->vSwitchCidrReservations[$n++] = null !== $item ? vSwitchCidrReservations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
