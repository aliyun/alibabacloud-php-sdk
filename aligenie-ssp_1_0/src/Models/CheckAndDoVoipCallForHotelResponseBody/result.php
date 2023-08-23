<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CheckAndDoVoipCallForHotelResponseBody;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CheckAndDoVoipCallForHotelResponseBody\result\deviceTargets;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CheckAndDoVoipCallForHotelResponseBody\result\startCallResult;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var deviceTargets
     */
    public $deviceTargets;

    /**
     * @var bool
     */
    public $isStartCall;

    /**
     * @var bool
     */
    public $passed;

    /**
     * @var startCallResult
     */
    public $startCallResult;
    protected $_name = [
        'deviceTargets'   => 'DeviceTargets',
        'isStartCall'     => 'IsStartCall',
        'passed'          => 'Passed',
        'startCallResult' => 'StartCallResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceTargets) {
            $res['DeviceTargets'] = null !== $this->deviceTargets ? $this->deviceTargets->toMap() : null;
        }
        if (null !== $this->isStartCall) {
            $res['IsStartCall'] = $this->isStartCall;
        }
        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
        }
        if (null !== $this->startCallResult) {
            $res['StartCallResult'] = null !== $this->startCallResult ? $this->startCallResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceTargets'])) {
            $model->deviceTargets = deviceTargets::fromMap($map['DeviceTargets']);
        }
        if (isset($map['IsStartCall'])) {
            $model->isStartCall = $map['IsStartCall'];
        }
        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }
        if (isset($map['StartCallResult'])) {
            $model->startCallResult = startCallResult::fromMap($map['StartCallResult']);
        }

        return $model;
    }
}
