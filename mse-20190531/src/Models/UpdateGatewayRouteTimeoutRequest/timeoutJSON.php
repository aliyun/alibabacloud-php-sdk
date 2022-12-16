<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteTimeoutRequest;

use AlibabaCloud\Tea\Model;

class timeoutJSON extends Model
{
    /**
     * @description The status of the policy.
     *
     * @example off
     *
     * @var string
     */
    public $status;

    /**
     * @description The unit of time. A value of s indicates seconds.
     *
     * @example s
     *
     * @var string
     */
    public $timeUnit;

    /**
     * @description The value of the timeout period.
     *
     * @example 1
     *
     * @var int
     */
    public $unitNum;
    protected $_name = [
        'status'   => 'Status',
        'timeUnit' => 'TimeUnit',
        'unitNum'  => 'UnitNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timeUnit) {
            $res['TimeUnit'] = $this->timeUnit;
        }
        if (null !== $this->unitNum) {
            $res['UnitNum'] = $this->unitNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeoutJSON
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TimeUnit'])) {
            $model->timeUnit = $map['TimeUnit'];
        }
        if (isset($map['UnitNum'])) {
            $model->unitNum = $map['UnitNum'];
        }

        return $model;
    }
}
