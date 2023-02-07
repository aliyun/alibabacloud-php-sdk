<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskProgressResponseBody\data;

use AlibabaCloud\Tea\Model;

class taskProgress extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $callingCount;

    /**
     * @example 2
     *
     * @var int
     */
    public $connectCount;

    /**
     * @example 0.2
     *
     * @var float
     */
    public $connectRate;

    /**
     * @example 2
     *
     * @var int
     */
    public $finishCount;

    /**
     * @example 0.20
     *
     * @var float
     */
    public $finishRate;

    /**
     * @example 2
     *
     * @var int
     */
    public $servicerPickupCount;

    /**
     * @example 0.2
     *
     * @var float
     */
    public $servicerPickupRate;

    /**
     * @example 2
     *
     * @var int
     */
    public $terminateCount;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;

    /**
     * @example 2
     *
     * @var int
     */
    public $userPickupCount;

    /**
     * @example 0.2
     *
     * @var float
     */
    public $userPickupRate;

    /**
     * @example 2
     *
     * @var int
     */
    public $waitingCallCount;

    /**
     * @example 2
     *
     * @var int
     */
    public $waitingRecallCount;
    protected $_name = [
        'callingCount'        => 'CallingCount',
        'connectCount'        => 'ConnectCount',
        'connectRate'         => 'ConnectRate',
        'finishCount'         => 'FinishCount',
        'finishRate'          => 'FinishRate',
        'servicerPickupCount' => 'ServicerPickupCount',
        'servicerPickupRate'  => 'ServicerPickupRate',
        'terminateCount'      => 'TerminateCount',
        'totalCount'          => 'TotalCount',
        'userPickupCount'     => 'UserPickupCount',
        'userPickupRate'      => 'UserPickupRate',
        'waitingCallCount'    => 'WaitingCallCount',
        'waitingRecallCount'  => 'WaitingRecallCount',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return taskProgress
     */
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
