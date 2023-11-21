<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\GetVSwitchCidrReservationUsageResponseBody\cidrReservationUsages;
use AlibabaCloud\Tea\Model;

class GetVSwitchCidrReservationUsageResponseBody extends Model
{
    /**
     * @description A list of reserved CIDR blocks that are in use.
     *
     * @var cidrReservationUsages[]
     */
    public $cidrReservationUsages;

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
    protected $_name = [
        'cidrReservationUsages' => 'CidrReservationUsages',
        'maxResults'            => 'MaxResults',
        'nextToken'             => 'NextToken',
        'requestId'             => 'RequestId',
        'totalCount'            => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrReservationUsages) {
            $res['CidrReservationUsages'] = [];
            if (null !== $this->cidrReservationUsages && \is_array($this->cidrReservationUsages)) {
                $n = 0;
                foreach ($this->cidrReservationUsages as $item) {
                    $res['CidrReservationUsages'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return GetVSwitchCidrReservationUsageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrReservationUsages'])) {
            if (!empty($map['CidrReservationUsages'])) {
                $model->cidrReservationUsages = [];
                $n                            = 0;
                foreach ($map['CidrReservationUsages'] as $item) {
                    $model->cidrReservationUsages[$n++] = null !== $item ? cidrReservationUsages::fromMap($item) : $item;
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
