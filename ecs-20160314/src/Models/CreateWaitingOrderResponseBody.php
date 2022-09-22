<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\Tea\Model;

class CreateWaitingOrderResponseBody extends Model
{
    /**
     * @var string
     */
    public $dryRunResult;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $waitTimeCycle;

    /**
     * @var int
     */
    public $waitTimeValue;

    /**
     * @var string
     */
    public $waitingOrderId;
    protected $_name = [
        'dryRunResult'   => 'DryRunResult',
        'requestId'      => 'RequestId',
        'waitTimeCycle'  => 'WaitTimeCycle',
        'waitTimeValue'  => 'WaitTimeValue',
        'waitingOrderId' => 'WaitingOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dryRunResult) {
            $res['DryRunResult'] = $this->dryRunResult;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->waitTimeCycle) {
            $res['WaitTimeCycle'] = $this->waitTimeCycle;
        }
        if (null !== $this->waitTimeValue) {
            $res['WaitTimeValue'] = $this->waitTimeValue;
        }
        if (null !== $this->waitingOrderId) {
            $res['WaitingOrderId'] = $this->waitingOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWaitingOrderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DryRunResult'])) {
            $model->dryRunResult = $map['DryRunResult'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WaitTimeCycle'])) {
            $model->waitTimeCycle = $map['WaitTimeCycle'];
        }
        if (isset($map['WaitTimeValue'])) {
            $model->waitTimeValue = $map['WaitTimeValue'];
        }
        if (isset($map['WaitingOrderId'])) {
            $model->waitingOrderId = $map['WaitingOrderId'];
        }

        return $model;
    }
}
