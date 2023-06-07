<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models\GetNetworkTrendResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 4402.8
     *
     * @var float
     */
    public $avgCost;

    /**
     * @example 1654.51
     *
     * @var float
     */
    public $avgResponseTime;

    /**
     * @example 3299.43
     *
     * @var float
     */
    public $avgTransformBytes;

    /**
     * @example 1.61
     *
     * @var float
     */
    public $requestPerMinute;

    /**
     * @example 2023-05-20
     *
     * @var string
     */
    public $timePoint;
    protected $_name = [
        'avgCost'           => 'avgCost',
        'avgResponseTime'   => 'avgResponseTime',
        'avgTransformBytes' => 'avgTransformBytes',
        'requestPerMinute'  => 'requestPerMinute',
        'timePoint'         => 'timePoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgCost) {
            $res['avgCost'] = $this->avgCost;
        }
        if (null !== $this->avgResponseTime) {
            $res['avgResponseTime'] = $this->avgResponseTime;
        }
        if (null !== $this->avgTransformBytes) {
            $res['avgTransformBytes'] = $this->avgTransformBytes;
        }
        if (null !== $this->requestPerMinute) {
            $res['requestPerMinute'] = $this->requestPerMinute;
        }
        if (null !== $this->timePoint) {
            $res['timePoint'] = $this->timePoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['avgCost'])) {
            $model->avgCost = $map['avgCost'];
        }
        if (isset($map['avgResponseTime'])) {
            $model->avgResponseTime = $map['avgResponseTime'];
        }
        if (isset($map['avgTransformBytes'])) {
            $model->avgTransformBytes = $map['avgTransformBytes'];
        }
        if (isset($map['requestPerMinute'])) {
            $model->requestPerMinute = $map['requestPerMinute'];
        }
        if (isset($map['timePoint'])) {
            $model->timePoint = $map['timePoint'];
        }

        return $model;
    }
}
