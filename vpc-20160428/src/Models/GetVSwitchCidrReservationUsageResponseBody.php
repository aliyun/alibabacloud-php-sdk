<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetVSwitchCidrReservationUsageResponseBody\cidrReservationUsages;

class GetVSwitchCidrReservationUsageResponseBody extends Model
{
    /**
     * @var cidrReservationUsages[]
     */
    public $cidrReservationUsages;

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
        'cidrReservationUsages' => 'CidrReservationUsages',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->cidrReservationUsages)) {
            Model::validateArray($this->cidrReservationUsages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidrReservationUsages) {
            if (\is_array($this->cidrReservationUsages)) {
                $res['CidrReservationUsages'] = [];
                $n1 = 0;
                foreach ($this->cidrReservationUsages as $item1) {
                    $res['CidrReservationUsages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrReservationUsages'])) {
            if (!empty($map['CidrReservationUsages'])) {
                $model->cidrReservationUsages = [];
                $n1 = 0;
                foreach ($map['CidrReservationUsages'] as $item1) {
                    $model->cidrReservationUsages[$n1] = cidrReservationUsages::fromMap($item1);
                    ++$n1;
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
