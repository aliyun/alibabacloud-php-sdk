<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskProgressResponseBody\data;

use AlibabaCloud\Dara\Model;

class taskProgress extends Model
{
    /**
     * @var int
     */
    public $callingCount;

    /**
     * @var int
     */
    public $connectCount;

    /**
     * @var float
     */
    public $connectRate;

    /**
     * @var int
     */
    public $finishCount;

    /**
     * @var float
     */
    public $finishRate;

    /**
     * @var int
     */
    public $servicerPickupCount;

    /**
     * @var float
     */
    public $servicerPickupRate;

    /**
     * @var int
     */
    public $terminateCount;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $userPickupCount;

    /**
     * @var float
     */
    public $userPickupRate;

    /**
     * @var int
     */
    public $waitingCallCount;

    /**
     * @var int
     */
    public $waitingRecallCount;
    protected $_name = [
        'callingCount' => 'CallingCount',
        'connectCount' => 'ConnectCount',
        'connectRate' => 'ConnectRate',
        'finishCount' => 'FinishCount',
        'finishRate' => 'FinishRate',
        'servicerPickupCount' => 'ServicerPickupCount',
        'servicerPickupRate' => 'ServicerPickupRate',
        'terminateCount' => 'TerminateCount',
        'totalCount' => 'TotalCount',
        'userPickupCount' => 'UserPickupCount',
        'userPickupRate' => 'UserPickupRate',
        'waitingCallCount' => 'WaitingCallCount',
        'waitingRecallCount' => 'WaitingRecallCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callingCount) {
            $res['CallingCount'] = $this->callingCount;
        }

        if (null !== $this->connectCount) {
            $res['ConnectCount'] = $this->connectCount;
        }

        if (null !== $this->connectRate) {
            $res['ConnectRate'] = $this->connectRate;
        }

        if (null !== $this->finishCount) {
            $res['FinishCount'] = $this->finishCount;
        }

        if (null !== $this->finishRate) {
            $res['FinishRate'] = $this->finishRate;
        }

        if (null !== $this->servicerPickupCount) {
            $res['ServicerPickupCount'] = $this->servicerPickupCount;
        }

        if (null !== $this->servicerPickupRate) {
            $res['ServicerPickupRate'] = $this->servicerPickupRate;
        }

        if (null !== $this->terminateCount) {
            $res['TerminateCount'] = $this->terminateCount;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->userPickupCount) {
            $res['UserPickupCount'] = $this->userPickupCount;
        }

        if (null !== $this->userPickupRate) {
            $res['UserPickupRate'] = $this->userPickupRate;
        }

        if (null !== $this->waitingCallCount) {
            $res['WaitingCallCount'] = $this->waitingCallCount;
        }

        if (null !== $this->waitingRecallCount) {
            $res['WaitingRecallCount'] = $this->waitingRecallCount;
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
        if (isset($map['CallingCount'])) {
            $model->callingCount = $map['CallingCount'];
        }

        if (isset($map['ConnectCount'])) {
            $model->connectCount = $map['ConnectCount'];
        }

        if (isset($map['ConnectRate'])) {
            $model->connectRate = $map['ConnectRate'];
        }

        if (isset($map['FinishCount'])) {
            $model->finishCount = $map['FinishCount'];
        }

        if (isset($map['FinishRate'])) {
            $model->finishRate = $map['FinishRate'];
        }

        if (isset($map['ServicerPickupCount'])) {
            $model->servicerPickupCount = $map['ServicerPickupCount'];
        }

        if (isset($map['ServicerPickupRate'])) {
            $model->servicerPickupRate = $map['ServicerPickupRate'];
        }

        if (isset($map['TerminateCount'])) {
            $model->terminateCount = $map['TerminateCount'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['UserPickupCount'])) {
            $model->userPickupCount = $map['UserPickupCount'];
        }

        if (isset($map['UserPickupRate'])) {
            $model->userPickupRate = $map['UserPickupRate'];
        }

        if (isset($map['WaitingCallCount'])) {
            $model->waitingCallCount = $map['WaitingCallCount'];
        }

        if (isset($map['WaitingRecallCount'])) {
            $model->waitingRecallCount = $map['WaitingRecallCount'];
        }

        return $model;
    }
}
