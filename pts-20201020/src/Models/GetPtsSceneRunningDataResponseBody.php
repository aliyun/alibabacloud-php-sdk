<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneRunningDataResponseBody\agentLocation;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneRunningDataResponseBody\chainMonitorDataList;
use AlibabaCloud\Tea\Model;

class GetPtsSceneRunningDataResponseBody extends Model
{
    /**
     * @var agentLocation[]
     */
    public $agentLocation;

    /**
     * @example 10
     *
     * @var int
     */
    public $aliveAgents;

    /**
     * @example 45
     *
     * @var int
     */
    public $averageRt;

    /**
     * @example 1651895518339
     *
     * @var int
     */
    public $beginTime;

    /**
     * @var chainMonitorDataList[]
     */
    public $chainMonitorDataList;

    /**
     * @example 4001
     *
     * @var string
     */
    public $code;

    /**
     * @example 10
     *
     * @var int
     */
    public $concurrency;

    /**
     * @example 20
     *
     * @var int
     */
    public $concurrencyLimit;

    /**
     * @example 78
     *
     * @var int
     */
    public $failedBusinessCount;

    /**
     * @example 90
     *
     * @var int
     */
    public $failedRequestCount;

    /**
     * @example false
     *
     * @var bool
     */
    public $hasReport;

    /**
     * @example 400
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example no message
     *
     * @var string
     */
    public $message;

    /**
     * @example 89kb
     *
     * @var string
     */
    public $requestBps;

    /**
     * @example DC4E3177-6745-4925-B423-4E89VV34221A
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 8kb
     *
     * @var string
     */
    public $responseBps;

    /**
     * @example 45
     *
     * @var int
     */
    public $seg90Rt;

    /**
     * @example 6
     *
     * @var int
     */
    public $status;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalAgents;

    /**
     * @var int
     */
    public $totalRealQps;

    /**
     * @example 8900
     *
     * @var int
     */
    public $totalRequestCount;

    /**
     * @example 80
     *
     * @var int
     */
    public $tpsLimit;

    /**
     * @example 100
     *
     * @var int
     */
    public $vum;
    protected $_name = [
        'agentLocation'        => 'AgentLocation',
        'aliveAgents'          => 'AliveAgents',
        'averageRt'            => 'AverageRt',
        'beginTime'            => 'BeginTime',
        'chainMonitorDataList' => 'ChainMonitorDataList',
        'code'                 => 'Code',
        'concurrency'          => 'Concurrency',
        'concurrencyLimit'     => 'ConcurrencyLimit',
        'failedBusinessCount'  => 'FailedBusinessCount',
        'failedRequestCount'   => 'FailedRequestCount',
        'hasReport'            => 'HasReport',
        'httpStatusCode'       => 'HttpStatusCode',
        'message'              => 'Message',
        'requestBps'           => 'RequestBps',
        'requestId'            => 'RequestId',
        'responseBps'          => 'ResponseBps',
        'seg90Rt'              => 'Seg90Rt',
        'status'               => 'Status',
        'success'              => 'Success',
        'totalAgents'          => 'TotalAgents',
        'totalRealQps'         => 'TotalRealQps',
        'totalRequestCount'    => 'TotalRequestCount',
        'tpsLimit'             => 'TpsLimit',
        'vum'                  => 'Vum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentLocation) {
            $res['AgentLocation'] = [];
            if (null !== $this->agentLocation && \is_array($this->agentLocation)) {
                $n = 0;
                foreach ($this->agentLocation as $item) {
                    $res['AgentLocation'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->aliveAgents) {
            $res['AliveAgents'] = $this->aliveAgents;
        }
        if (null !== $this->averageRt) {
            $res['AverageRt'] = $this->averageRt;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->chainMonitorDataList) {
            $res['ChainMonitorDataList'] = [];
            if (null !== $this->chainMonitorDataList && \is_array($this->chainMonitorDataList)) {
                $n = 0;
                foreach ($this->chainMonitorDataList as $item) {
                    $res['ChainMonitorDataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->failedBusinessCount) {
            $res['FailedBusinessCount'] = $this->failedBusinessCount;
        }
        if (null !== $this->failedRequestCount) {
            $res['FailedRequestCount'] = $this->failedRequestCount;
        }
        if (null !== $this->hasReport) {
            $res['HasReport'] = $this->hasReport;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestBps) {
            $res['RequestBps'] = $this->requestBps;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->responseBps) {
            $res['ResponseBps'] = $this->responseBps;
        }
        if (null !== $this->seg90Rt) {
            $res['Seg90Rt'] = $this->seg90Rt;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalAgents) {
            $res['TotalAgents'] = $this->totalAgents;
        }
        if (null !== $this->totalRealQps) {
            $res['TotalRealQps'] = $this->totalRealQps;
        }
        if (null !== $this->totalRequestCount) {
            $res['TotalRequestCount'] = $this->totalRequestCount;
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
     * @return GetPtsSceneRunningDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentLocation'])) {
            if (!empty($map['AgentLocation'])) {
                $model->agentLocation = [];
                $n                    = 0;
                foreach ($map['AgentLocation'] as $item) {
                    $model->agentLocation[$n++] = null !== $item ? agentLocation::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AliveAgents'])) {
            $model->aliveAgents = $map['AliveAgents'];
        }
        if (isset($map['AverageRt'])) {
            $model->averageRt = $map['AverageRt'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['ChainMonitorDataList'])) {
            if (!empty($map['ChainMonitorDataList'])) {
                $model->chainMonitorDataList = [];
                $n                           = 0;
                foreach ($map['ChainMonitorDataList'] as $item) {
                    $model->chainMonitorDataList[$n++] = null !== $item ? chainMonitorDataList::fromMap($item) : $item;
                }
            }
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
        if (isset($map['FailedBusinessCount'])) {
            $model->failedBusinessCount = $map['FailedBusinessCount'];
        }
        if (isset($map['FailedRequestCount'])) {
            $model->failedRequestCount = $map['FailedRequestCount'];
        }
        if (isset($map['HasReport'])) {
            $model->hasReport = $map['HasReport'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestBps'])) {
            $model->requestBps = $map['RequestBps'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResponseBps'])) {
            $model->responseBps = $map['ResponseBps'];
        }
        if (isset($map['Seg90Rt'])) {
            $model->seg90Rt = $map['Seg90Rt'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalAgents'])) {
            $model->totalAgents = $map['TotalAgents'];
        }
        if (isset($map['TotalRealQps'])) {
            $model->totalRealQps = $map['TotalRealQps'];
        }
        if (isset($map['TotalRequestCount'])) {
            $model->totalRequestCount = $map['TotalRequestCount'];
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
