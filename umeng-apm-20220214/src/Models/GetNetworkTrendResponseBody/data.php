<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models\GetNetworkTrendResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $avgCost;

    /**
     * @var float
     */
    public $avgResponseTime;

    /**
     * @var float
     */
    public $avgTransformBytes;

    /**
     * @var float
     */
    public $requestPerMinute;

    /**
     * @var string
     */
    public $timePoint;
    protected $_name = [
        'avgCost' => 'avgCost',
        'avgResponseTime' => 'avgResponseTime',
        'avgTransformBytes' => 'avgTransformBytes',
        'requestPerMinute' => 'requestPerMinute',
        'timePoint' => 'timePoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
