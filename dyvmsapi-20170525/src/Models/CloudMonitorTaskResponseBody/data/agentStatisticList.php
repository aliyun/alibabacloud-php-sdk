<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudMonitorTaskResponseBody\data;

use AlibabaCloud\Dara\Model;

class agentStatisticList extends Model
{
    /**
     * @var int
     */
    public $agentAvgIdleTime;

    /**
     * @var string
     */
    public $agentStatus;

    /**
     * @var string
     */
    public $avgBridgeTime;

    /**
     * @var int
     */
    public $bridgeCount;

    /**
     * @var float
     */
    public $bridgeIn2sRate;

    /**
     * @var int
     */
    public $callLimit;

    /**
     * @var int
     */
    public $calledCount;

    /**
     * @var string
     */
    public $cno;

    /**
     * @var int
     */
    public $enterpriseCallLimit;

    /**
     * @var int
     */
    public $enterpriseTodayAnsweredCount;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $noBridgeCount;

    /**
     * @var int
     */
    public $todayAnsweredCount;
    protected $_name = [
        'agentAvgIdleTime' => 'AgentAvgIdleTime',
        'agentStatus' => 'AgentStatus',
        'avgBridgeTime' => 'AvgBridgeTime',
        'bridgeCount' => 'BridgeCount',
        'bridgeIn2sRate' => 'BridgeIn2sRate',
        'callLimit' => 'CallLimit',
        'calledCount' => 'CalledCount',
        'cno' => 'Cno',
        'enterpriseCallLimit' => 'EnterpriseCallLimit',
        'enterpriseTodayAnsweredCount' => 'EnterpriseTodayAnsweredCount',
        'name' => 'Name',
        'noBridgeCount' => 'NoBridgeCount',
        'todayAnsweredCount' => 'TodayAnsweredCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentAvgIdleTime) {
            $res['AgentAvgIdleTime'] = $this->agentAvgIdleTime;
        }

        if (null !== $this->agentStatus) {
            $res['AgentStatus'] = $this->agentStatus;
        }

        if (null !== $this->avgBridgeTime) {
            $res['AvgBridgeTime'] = $this->avgBridgeTime;
        }

        if (null !== $this->bridgeCount) {
            $res['BridgeCount'] = $this->bridgeCount;
        }

        if (null !== $this->bridgeIn2sRate) {
            $res['BridgeIn2sRate'] = $this->bridgeIn2sRate;
        }

        if (null !== $this->callLimit) {
            $res['CallLimit'] = $this->callLimit;
        }

        if (null !== $this->calledCount) {
            $res['CalledCount'] = $this->calledCount;
        }

        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
        }

        if (null !== $this->enterpriseCallLimit) {
            $res['EnterpriseCallLimit'] = $this->enterpriseCallLimit;
        }

        if (null !== $this->enterpriseTodayAnsweredCount) {
            $res['EnterpriseTodayAnsweredCount'] = $this->enterpriseTodayAnsweredCount;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->noBridgeCount) {
            $res['NoBridgeCount'] = $this->noBridgeCount;
        }

        if (null !== $this->todayAnsweredCount) {
            $res['TodayAnsweredCount'] = $this->todayAnsweredCount;
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
        if (isset($map['AgentAvgIdleTime'])) {
            $model->agentAvgIdleTime = $map['AgentAvgIdleTime'];
        }

        if (isset($map['AgentStatus'])) {
            $model->agentStatus = $map['AgentStatus'];
        }

        if (isset($map['AvgBridgeTime'])) {
            $model->avgBridgeTime = $map['AvgBridgeTime'];
        }

        if (isset($map['BridgeCount'])) {
            $model->bridgeCount = $map['BridgeCount'];
        }

        if (isset($map['BridgeIn2sRate'])) {
            $model->bridgeIn2sRate = $map['BridgeIn2sRate'];
        }

        if (isset($map['CallLimit'])) {
            $model->callLimit = $map['CallLimit'];
        }

        if (isset($map['CalledCount'])) {
            $model->calledCount = $map['CalledCount'];
        }

        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['EnterpriseCallLimit'])) {
            $model->enterpriseCallLimit = $map['EnterpriseCallLimit'];
        }

        if (isset($map['EnterpriseTodayAnsweredCount'])) {
            $model->enterpriseTodayAnsweredCount = $map['EnterpriseTodayAnsweredCount'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NoBridgeCount'])) {
            $model->noBridgeCount = $map['NoBridgeCount'];
        }

        if (isset($map['TodayAnsweredCount'])) {
            $model->todayAnsweredCount = $map['TodayAnsweredCount'];
        }

        return $model;
    }
}
