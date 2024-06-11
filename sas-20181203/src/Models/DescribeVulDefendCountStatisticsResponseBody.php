<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeVulDefendCountStatisticsResponseBody extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $raspDefendedCount;

    /**
     * @example 100
     *
     * @var int
     */
    public $raspDefensibleCount;

    /**
     * @example CE500770-42D3-442E-9DDD-156E0F9F3B45
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'raspDefendedCount'   => 'RaspDefendedCount',
        'raspDefensibleCount' => 'RaspDefensibleCount',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->raspDefendedCount) {
            $res['RaspDefendedCount'] = $this->raspDefendedCount;
        }
        if (null !== $this->raspDefensibleCount) {
            $res['RaspDefensibleCount'] = $this->raspDefensibleCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVulDefendCountStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RaspDefendedCount'])) {
            $model->raspDefendedCount = $map['RaspDefendedCount'];
        }
        if (isset($map['RaspDefensibleCount'])) {
            $model->raspDefensibleCount = $map['RaspDefensibleCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
