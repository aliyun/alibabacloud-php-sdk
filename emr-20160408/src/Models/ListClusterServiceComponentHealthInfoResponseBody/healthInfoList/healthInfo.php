<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceComponentHealthInfoResponseBody\healthInfoList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceComponentHealthInfoResponseBody\healthInfoList\healthInfo\healthDetailList;
use AlibabaCloud\Tea\Model;

class healthInfo extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $agentHeartBeatLostNum;

    /**
     * @var int
     */
    public $badHealthNum;

    /**
     * @example ResourceManager
     *
     * @var string
     */
    public $componentName;

    /**
     * @example 0
     *
     * @var int
     */
    public $createdTime;

    /**
     * @var int
     */
    public $disabledHealthNum;

    /**
     * @var int
     */
    public $goodHealthNum;

    /**
     * @var healthDetailList
     */
    public $healthDetailList;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $healthLevel;

    /**
     * @var string
     */
    public $healthStatus;

    /**
     * @example 0
     *
     * @var int
     */
    public $manualStoppedNum;

    /**
     * @var int
     */
    public $noneHealthNum;

    /**
     * @example 7
     *
     * @var int
     */
    public $normalNum;

    /**
     * @example YARN
     *
     * @var string
     */
    public $serviceName;

    /**
     * @var int
     */
    public $stoppedHealthNum;

    /**
     * @example 0
     *
     * @var int
     */
    public $stoppedNum;

    /**
     * @example 7
     *
     * @var int
     */
    public $totalNum;

    /**
     * @var int
     */
    public $unknownHealthNum;

    /**
     * @var int
     */
    public $warningHealthNum;
    protected $_name = [
        'agentHeartBeatLostNum' => 'AgentHeartBeatLostNum',
        'badHealthNum'          => 'BadHealthNum',
        'componentName'         => 'ComponentName',
        'createdTime'           => 'CreatedTime',
        'disabledHealthNum'     => 'DisabledHealthNum',
        'goodHealthNum'         => 'GoodHealthNum',
        'healthDetailList'      => 'HealthDetailList',
        'healthLevel'           => 'HealthLevel',
        'healthStatus'          => 'HealthStatus',
        'manualStoppedNum'      => 'ManualStoppedNum',
        'noneHealthNum'         => 'NoneHealthNum',
        'normalNum'             => 'NormalNum',
        'serviceName'           => 'ServiceName',
        'stoppedHealthNum'      => 'StoppedHealthNum',
        'stoppedNum'            => 'StoppedNum',
        'totalNum'              => 'TotalNum',
        'unknownHealthNum'      => 'UnknownHealthNum',
        'warningHealthNum'      => 'WarningHealthNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentHeartBeatLostNum) {
            $res['AgentHeartBeatLostNum'] = $this->agentHeartBeatLostNum;
        }
        if (null !== $this->badHealthNum) {
            $res['BadHealthNum'] = $this->badHealthNum;
        }
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->disabledHealthNum) {
            $res['DisabledHealthNum'] = $this->disabledHealthNum;
        }
        if (null !== $this->goodHealthNum) {
            $res['GoodHealthNum'] = $this->goodHealthNum;
        }
        if (null !== $this->healthDetailList) {
            $res['HealthDetailList'] = null !== $this->healthDetailList ? $this->healthDetailList->toMap() : null;
        }
        if (null !== $this->healthLevel) {
            $res['HealthLevel'] = $this->healthLevel;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->manualStoppedNum) {
            $res['ManualStoppedNum'] = $this->manualStoppedNum;
        }
        if (null !== $this->noneHealthNum) {
            $res['NoneHealthNum'] = $this->noneHealthNum;
        }
        if (null !== $this->normalNum) {
            $res['NormalNum'] = $this->normalNum;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->stoppedHealthNum) {
            $res['StoppedHealthNum'] = $this->stoppedHealthNum;
        }
        if (null !== $this->stoppedNum) {
            $res['StoppedNum'] = $this->stoppedNum;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->unknownHealthNum) {
            $res['UnknownHealthNum'] = $this->unknownHealthNum;
        }
        if (null !== $this->warningHealthNum) {
            $res['WarningHealthNum'] = $this->warningHealthNum;
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
        if (isset($map['AgentHeartBeatLostNum'])) {
            $model->agentHeartBeatLostNum = $map['AgentHeartBeatLostNum'];
        }
        if (isset($map['BadHealthNum'])) {
            $model->badHealthNum = $map['BadHealthNum'];
        }
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DisabledHealthNum'])) {
            $model->disabledHealthNum = $map['DisabledHealthNum'];
        }
        if (isset($map['GoodHealthNum'])) {
            $model->goodHealthNum = $map['GoodHealthNum'];
        }
        if (isset($map['HealthDetailList'])) {
            $model->healthDetailList = healthDetailList::fromMap($map['HealthDetailList']);
        }
        if (isset($map['HealthLevel'])) {
            $model->healthLevel = $map['HealthLevel'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['ManualStoppedNum'])) {
            $model->manualStoppedNum = $map['ManualStoppedNum'];
        }
        if (isset($map['NoneHealthNum'])) {
            $model->noneHealthNum = $map['NoneHealthNum'];
        }
        if (isset($map['NormalNum'])) {
            $model->normalNum = $map['NormalNum'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['StoppedHealthNum'])) {
            $model->stoppedHealthNum = $map['StoppedHealthNum'];
        }
        if (isset($map['StoppedNum'])) {
            $model->stoppedNum = $map['StoppedNum'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['UnknownHealthNum'])) {
            $model->unknownHealthNum = $map['UnknownHealthNum'];
        }
        if (isset($map['WarningHealthNum'])) {
            $model->warningHealthNum = $map['WarningHealthNum'];
        }

        return $model;
    }
}
