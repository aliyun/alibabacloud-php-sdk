<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class GetInstTransInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isAutoRenew;

    /**
     * @var int
     */
    public $renewCycle;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'chargeType'  => 'chargeType',
        'endTime'     => 'endTime',
        'instanceId'  => 'instanceId',
        'isAutoRenew' => 'isAutoRenew',
        'renewCycle'  => 'renewCycle',
        'startTime'   => 'startTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['chargeType'] = $this->chargeType;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->isAutoRenew) {
            $res['isAutoRenew'] = $this->isAutoRenew;
        }
        if (null !== $this->renewCycle) {
            $res['renewCycle'] = $this->renewCycle;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstTransInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['chargeType'])) {
            $model->chargeType = $map['chargeType'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['isAutoRenew'])) {
            $model->isAutoRenew = $map['isAutoRenew'];
        }
        if (isset($map['renewCycle'])) {
            $model->renewCycle = $map['renewCycle'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
