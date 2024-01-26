<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20181111\Models;

use AlibabaCloud\SDK\PTS\V20181111\Models\QueryPlanStatusResponseBody\agentLocations;
use AlibabaCloud\SDK\PTS\V20181111\Models\QueryPlanStatusResponseBody\monitorData;
use AlibabaCloud\Tea\Model;

class QueryPlanStatusResponseBody extends Model
{
    /**
     * @var agentLocations
     */
    public $agentLocations;

    /**
     * @var int
     */
    public $aliveAgentCount;

    /**
     * @var int
     */
    public $averageRt;

    /**
     * @var string
     */
    public $bpsRequest;

    /**
     * @var string
     */
    public $bpsResponse;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $concurrency;

    /**
     * @var int
     */
    public $concurrencyLimit;

    /**
     * @var int
     */
    public $currentTime;

    /**
     * @var int
     */
    public $failedBusinessCount;

    /**
     * @var int
     */
    public $failedRequestCount;

    /**
     * @var string
     */
    public $message;

    /**
     * @var monitorData
     */
    public $monitorData;

    /**
     * @var int
     */
    public $reportId;

    /**
     * @var string
     */
    public $requestCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $seg90Rt;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $tips;

    /**
     * @var int
     */
    public $totalAgentCount;

    /**
     * @var int
     */
    public $tps;

    /**
     * @var int
     */
    public $tpsLimit;

    /**
     * @var int
     */
    public $vum;
    protected $_name = [
        'agentLocations'      => 'AgentLocations',
        'aliveAgentCount'     => 'AliveAgentCount',
        'averageRt'           => 'AverageRt',
        'bpsRequest'          => 'BpsRequest',
        'bpsResponse'         => 'BpsResponse',
        'code'                => 'Code',
        'concurrency'         => 'Concurrency',
        'concurrencyLimit'    => 'ConcurrencyLimit',
        'currentTime'         => 'CurrentTime',
        'failedBusinessCount' => 'FailedBusinessCount',
        'failedRequestCount'  => 'FailedRequestCount',
        'message'             => 'Message',
        'monitorData'         => 'MonitorData',
        'reportId'            => 'ReportId',
        'requestCount'        => 'RequestCount',
        'requestId'           => 'RequestId',
        'seg90Rt'             => 'Seg90Rt',
        'startTime'           => 'StartTime',
        'success'             => 'Success',
        'tips'                => 'Tips',
        'totalAgentCount'     => 'TotalAgentCount',
        'tps'                 => 'Tps',
        'tpsLimit'            => 'TpsLimit',
        'vum'                 => 'Vum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentLocations) {
            $res['AgentLocations'] = null !== $this->agentLocations ? $this->agentLocations->toMap() : null;
        }
        if (null !== $this->aliveAgentCount) {
            $res['AliveAgentCount'] = $this->aliveAgentCount;
        }
        if (null !== $this->averageRt) {
            $res['AverageRt'] = $this->averageRt;
        }
        if (null !== $this->bpsRequest) {
            $res['BpsRequest'] = $this->bpsRequest;
        }
        if (null !== $this->bpsResponse) {
            $res['BpsResponse'] = $this->bpsResponse;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }
        if (null !== $this->concurrencyLimit) {
            $res['ConcurrencyLimit'] = $this->concurrencyLimit;
        }
        if (null !== $this->currentTime) {
            $res['CurrentTime'] = $this->currentTime;
        }
        if (null !== $this->failedBusinessCount) {
            $res['FailedBusinessCount'] = $this->failedBusinessCount;
        }
        if (null !== $this->failedRequestCount) {
            $res['FailedRequestCount'] = $this->failedRequestCount;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->monitorData) {
            $res['MonitorData'] = null !== $this->monitorData ? $this->monitorData->toMap() : null;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->requestCount) {
            $res['RequestCount'] = $this->requestCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->seg90Rt) {
            $res['Seg90Rt'] = $this->seg90Rt;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }
        if (null !== $this->totalAgentCount) {
            $res['TotalAgentCount'] = $this->totalAgentCount;
        }
        if (null !== $this->tps) {
            $res['Tps'] = $this->tps;
        }
        if (null !== $this->tpsLimit) {
            $res['TpsLimit'] = $this->tpsLimit;
        }
        if (null !== $this->vum) {
            $res['Vum'] = $this->vum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPlanStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentLocations'])) {
            $model->agentLocations = agentLocations::fromMap($map['AgentLocations']);
        }
        if (isset($map['AliveAgentCount'])) {
            $model->aliveAgentCount = $map['AliveAgentCount'];
        }
        if (isset($map['AverageRt'])) {
            $model->averageRt = $map['AverageRt'];
        }
        if (isset($map['BpsRequest'])) {
            $model->bpsRequest = $map['BpsRequest'];
        }
        if (isset($map['BpsResponse'])) {
            $model->bpsResponse = $map['BpsResponse'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }
        if (isset($map['ConcurrencyLimit'])) {
            $model->concurrencyLimit = $map['ConcurrencyLimit'];
        }
        if (isset($map['CurrentTime'])) {
            $model->currentTime = $map['CurrentTime'];
        }
        if (isset($map['FailedBusinessCount'])) {
            $model->failedBusinessCount = $map['FailedBusinessCount'];
        }
        if (isset($map['FailedRequestCount'])) {
            $model->failedRequestCount = $map['FailedRequestCount'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['MonitorData'])) {
            $model->monitorData = monitorData::fromMap($map['MonitorData']);
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['RequestCount'])) {
            $model->requestCount = $map['RequestCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Seg90Rt'])) {
            $model->seg90Rt = $map['Seg90Rt'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }
        if (isset($map['TotalAgentCount'])) {
            $model->totalAgentCount = $map['TotalAgentCount'];
        }
        if (isset($map['Tps'])) {
            $model->tps = $map['Tps'];
        }
        if (isset($map['TpsLimit'])) {
            $model->tpsLimit = $map['TpsLimit'];
        }
        if (isset($map['Vum'])) {
            $model->vum = $map['Vum'];
        }

        return $model;
    }
}
