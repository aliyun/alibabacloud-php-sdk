<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceComponentHealthInfoResponseBody\healthInfoList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceComponentHealthInfoResponseBody\healthInfoList\healthInfo\healthDetailList;
use AlibabaCloud\Tea\Model;

class healthInfo extends Model
{
    /**
     * @var string
     */
    public $healthLevel;

    /**
     * @var healthDetailList
     */
    public $healthDetailList;

    /**
     * @var string
     */
    public $componentName;

    /**
     * @var int
     */
    public $normalNum;

    /**
     * @var int
     */
    public $manualStoppedNum;

    /**
     * @var int
     */
    public $stoppedNum;

    /**
     * @var int
     */
    public $agentHeartBeatLostNum;

    /**
     * @var int
     */
    public $totalNum;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var int
     */
    public $createdTime;
    protected $_name = [
        'healthLevel'           => 'HealthLevel',
        'healthDetailList'      => 'HealthDetailList',
        'componentName'         => 'ComponentName',
        'normalNum'             => 'NormalNum',
        'manualStoppedNum'      => 'ManualStoppedNum',
        'stoppedNum'            => 'StoppedNum',
        'agentHeartBeatLostNum' => 'AgentHeartBeatLostNum',
        'totalNum'              => 'TotalNum',
        'serviceName'           => 'ServiceName',
        'createdTime'           => 'CreatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthLevel) {
            $res['HealthLevel'] = $this->healthLevel;
        }
        if (null !== $this->healthDetailList) {
            $res['HealthDetailList'] = null !== $this->healthDetailList ? $this->healthDetailList->toMap() : null;
        }
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }
        if (null !== $this->normalNum) {
            $res['NormalNum'] = $this->normalNum;
        }
        if (null !== $this->manualStoppedNum) {
            $res['ManualStoppedNum'] = $this->manualStoppedNum;
        }
        if (null !== $this->stoppedNum) {
            $res['StoppedNum'] = $this->stoppedNum;
        }
        if (null !== $this->agentHeartBeatLostNum) {
            $res['AgentHeartBeatLostNum'] = $this->agentHeartBeatLostNum;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return healthInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthLevel'])) {
            $model->healthLevel = $map['HealthLevel'];
        }
        if (isset($map['HealthDetailList'])) {
            $model->healthDetailList = healthDetailList::fromMap($map['HealthDetailList']);
        }
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['NormalNum'])) {
            $model->normalNum = $map['NormalNum'];
        }
        if (isset($map['ManualStoppedNum'])) {
            $model->manualStoppedNum = $map['ManualStoppedNum'];
        }
        if (isset($map['StoppedNum'])) {
            $model->stoppedNum = $map['StoppedNum'];
        }
        if (isset($map['AgentHeartBeatLostNum'])) {
            $model->agentHeartBeatLostNum = $map['AgentHeartBeatLostNum'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        return $model;
    }
}
