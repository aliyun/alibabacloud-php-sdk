<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudOutboundPreviewObReportResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $agentAnsweredCount;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $agentRate;

    /**
     * @var string
     */
    public $avgBridgeTime;

    /**
     * @var string
     */
    public $axbBothAnsweredCount;

    /**
     * @var string
     */
    public $axbBothAnsweredRate;

    /**
     * @var string
     */
    public $axbBothAnsweredTime;

    /**
     * @var string
     */
    public $axbObTotalCount;

    /**
     * @var string
     */
    public $bothAnsweredCount;

    /**
     * @var string
     */
    public $bothAnsweredTime;

    /**
     * @var string
     */
    public $callBridgedRate;

    /**
     * @var string
     */
    public $callTotalCount;

    /**
     * @var string
     */
    public $cno;

    /**
     * @var string
     */
    public $customerAnsweredCount;

    /**
     * @var string
     */
    public $customerRate;

    /**
     * @var string
     */
    public $dateTimeRange;

    /**
     * @var string
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $interceptionCount;

    /**
     * @var string
     */
    public $interceptionRate;

    /**
     * @var string
     */
    public $landlineBothAnsweredCount;

    /**
     * @var string
     */
    public $landlineBothAnsweredRate;

    /**
     * @var string
     */
    public $landlineBothAnsweredTime;

    /**
     * @var string
     */
    public $landlineObTotalCount;

    /**
     * @var string
     */
    public $maxBridgeTime;

    /**
     * @var string
     */
    public $minBridgeTime;

    /**
     * @var string
     */
    public $totalBridgeTime;

    /**
     * @var string
     */
    public $totalCount;

    /**
     * @var string
     */
    public $vadRate;

    /**
     * @var string
     */
    public $validAvgBridgeTime;

    /**
     * @var string
     */
    public $validCalls;

    /**
     * @var string
     */
    public $validTotalBridgeTime;
    protected $_name = [
        'agentAnsweredCount' => 'AgentAnsweredCount',
        'agentName' => 'AgentName',
        'agentRate' => 'AgentRate',
        'avgBridgeTime' => 'AvgBridgeTime',
        'axbBothAnsweredCount' => 'AxbBothAnsweredCount',
        'axbBothAnsweredRate' => 'AxbBothAnsweredRate',
        'axbBothAnsweredTime' => 'AxbBothAnsweredTime',
        'axbObTotalCount' => 'AxbObTotalCount',
        'bothAnsweredCount' => 'BothAnsweredCount',
        'bothAnsweredTime' => 'BothAnsweredTime',
        'callBridgedRate' => 'CallBridgedRate',
        'callTotalCount' => 'CallTotalCount',
        'cno' => 'Cno',
        'customerAnsweredCount' => 'CustomerAnsweredCount',
        'customerRate' => 'CustomerRate',
        'dateTimeRange' => 'DateTimeRange',
        'enterpriseId' => 'EnterpriseId',
        'interceptionCount' => 'InterceptionCount',
        'interceptionRate' => 'InterceptionRate',
        'landlineBothAnsweredCount' => 'LandlineBothAnsweredCount',
        'landlineBothAnsweredRate' => 'LandlineBothAnsweredRate',
        'landlineBothAnsweredTime' => 'LandlineBothAnsweredTime',
        'landlineObTotalCount' => 'LandlineObTotalCount',
        'maxBridgeTime' => 'MaxBridgeTime',
        'minBridgeTime' => 'MinBridgeTime',
        'totalBridgeTime' => 'TotalBridgeTime',
        'totalCount' => 'TotalCount',
        'vadRate' => 'VadRate',
        'validAvgBridgeTime' => 'ValidAvgBridgeTime',
        'validCalls' => 'ValidCalls',
        'validTotalBridgeTime' => 'ValidTotalBridgeTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentAnsweredCount) {
            $res['AgentAnsweredCount'] = $this->agentAnsweredCount;
        }

        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->agentRate) {
            $res['AgentRate'] = $this->agentRate;
        }

        if (null !== $this->avgBridgeTime) {
            $res['AvgBridgeTime'] = $this->avgBridgeTime;
        }

        if (null !== $this->axbBothAnsweredCount) {
            $res['AxbBothAnsweredCount'] = $this->axbBothAnsweredCount;
        }

        if (null !== $this->axbBothAnsweredRate) {
            $res['AxbBothAnsweredRate'] = $this->axbBothAnsweredRate;
        }

        if (null !== $this->axbBothAnsweredTime) {
            $res['AxbBothAnsweredTime'] = $this->axbBothAnsweredTime;
        }

        if (null !== $this->axbObTotalCount) {
            $res['AxbObTotalCount'] = $this->axbObTotalCount;
        }

        if (null !== $this->bothAnsweredCount) {
            $res['BothAnsweredCount'] = $this->bothAnsweredCount;
        }

        if (null !== $this->bothAnsweredTime) {
            $res['BothAnsweredTime'] = $this->bothAnsweredTime;
        }

        if (null !== $this->callBridgedRate) {
            $res['CallBridgedRate'] = $this->callBridgedRate;
        }

        if (null !== $this->callTotalCount) {
            $res['CallTotalCount'] = $this->callTotalCount;
        }

        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
        }

        if (null !== $this->customerAnsweredCount) {
            $res['CustomerAnsweredCount'] = $this->customerAnsweredCount;
        }

        if (null !== $this->customerRate) {
            $res['CustomerRate'] = $this->customerRate;
        }

        if (null !== $this->dateTimeRange) {
            $res['DateTimeRange'] = $this->dateTimeRange;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->interceptionCount) {
            $res['InterceptionCount'] = $this->interceptionCount;
        }

        if (null !== $this->interceptionRate) {
            $res['InterceptionRate'] = $this->interceptionRate;
        }

        if (null !== $this->landlineBothAnsweredCount) {
            $res['LandlineBothAnsweredCount'] = $this->landlineBothAnsweredCount;
        }

        if (null !== $this->landlineBothAnsweredRate) {
            $res['LandlineBothAnsweredRate'] = $this->landlineBothAnsweredRate;
        }

        if (null !== $this->landlineBothAnsweredTime) {
            $res['LandlineBothAnsweredTime'] = $this->landlineBothAnsweredTime;
        }

        if (null !== $this->landlineObTotalCount) {
            $res['LandlineObTotalCount'] = $this->landlineObTotalCount;
        }

        if (null !== $this->maxBridgeTime) {
            $res['MaxBridgeTime'] = $this->maxBridgeTime;
        }

        if (null !== $this->minBridgeTime) {
            $res['MinBridgeTime'] = $this->minBridgeTime;
        }

        if (null !== $this->totalBridgeTime) {
            $res['TotalBridgeTime'] = $this->totalBridgeTime;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->vadRate) {
            $res['VadRate'] = $this->vadRate;
        }

        if (null !== $this->validAvgBridgeTime) {
            $res['ValidAvgBridgeTime'] = $this->validAvgBridgeTime;
        }

        if (null !== $this->validCalls) {
            $res['ValidCalls'] = $this->validCalls;
        }

        if (null !== $this->validTotalBridgeTime) {
            $res['ValidTotalBridgeTime'] = $this->validTotalBridgeTime;
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
        if (isset($map['AgentAnsweredCount'])) {
            $model->agentAnsweredCount = $map['AgentAnsweredCount'];
        }

        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['AgentRate'])) {
            $model->agentRate = $map['AgentRate'];
        }

        if (isset($map['AvgBridgeTime'])) {
            $model->avgBridgeTime = $map['AvgBridgeTime'];
        }

        if (isset($map['AxbBothAnsweredCount'])) {
            $model->axbBothAnsweredCount = $map['AxbBothAnsweredCount'];
        }

        if (isset($map['AxbBothAnsweredRate'])) {
            $model->axbBothAnsweredRate = $map['AxbBothAnsweredRate'];
        }

        if (isset($map['AxbBothAnsweredTime'])) {
            $model->axbBothAnsweredTime = $map['AxbBothAnsweredTime'];
        }

        if (isset($map['AxbObTotalCount'])) {
            $model->axbObTotalCount = $map['AxbObTotalCount'];
        }

        if (isset($map['BothAnsweredCount'])) {
            $model->bothAnsweredCount = $map['BothAnsweredCount'];
        }

        if (isset($map['BothAnsweredTime'])) {
            $model->bothAnsweredTime = $map['BothAnsweredTime'];
        }

        if (isset($map['CallBridgedRate'])) {
            $model->callBridgedRate = $map['CallBridgedRate'];
        }

        if (isset($map['CallTotalCount'])) {
            $model->callTotalCount = $map['CallTotalCount'];
        }

        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['CustomerAnsweredCount'])) {
            $model->customerAnsweredCount = $map['CustomerAnsweredCount'];
        }

        if (isset($map['CustomerRate'])) {
            $model->customerRate = $map['CustomerRate'];
        }

        if (isset($map['DateTimeRange'])) {
            $model->dateTimeRange = $map['DateTimeRange'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['InterceptionCount'])) {
            $model->interceptionCount = $map['InterceptionCount'];
        }

        if (isset($map['InterceptionRate'])) {
            $model->interceptionRate = $map['InterceptionRate'];
        }

        if (isset($map['LandlineBothAnsweredCount'])) {
            $model->landlineBothAnsweredCount = $map['LandlineBothAnsweredCount'];
        }

        if (isset($map['LandlineBothAnsweredRate'])) {
            $model->landlineBothAnsweredRate = $map['LandlineBothAnsweredRate'];
        }

        if (isset($map['LandlineBothAnsweredTime'])) {
            $model->landlineBothAnsweredTime = $map['LandlineBothAnsweredTime'];
        }

        if (isset($map['LandlineObTotalCount'])) {
            $model->landlineObTotalCount = $map['LandlineObTotalCount'];
        }

        if (isset($map['MaxBridgeTime'])) {
            $model->maxBridgeTime = $map['MaxBridgeTime'];
        }

        if (isset($map['MinBridgeTime'])) {
            $model->minBridgeTime = $map['MinBridgeTime'];
        }

        if (isset($map['TotalBridgeTime'])) {
            $model->totalBridgeTime = $map['TotalBridgeTime'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['VadRate'])) {
            $model->vadRate = $map['VadRate'];
        }

        if (isset($map['ValidAvgBridgeTime'])) {
            $model->validAvgBridgeTime = $map['ValidAvgBridgeTime'];
        }

        if (isset($map['ValidCalls'])) {
            $model->validCalls = $map['ValidCalls'];
        }

        if (isset($map['ValidTotalBridgeTime'])) {
            $model->validTotalBridgeTime = $map['ValidTotalBridgeTime'];
        }

        return $model;
    }
}
