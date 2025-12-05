<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneRunningDataResponseBody\agentLocation;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneRunningDataResponseBody\chainMonitorDataList;

class GetPtsSceneRunningDataResponseBody extends Model
{
    /**
     * @var agentLocation[]
     */
    public $agentLocation;

    /**
     * @var int
     */
    public $aliveAgents;

    /**
     * @var int
     */
    public $averageRt;

    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var chainMonitorDataList[]
     */
    public $chainMonitorDataList;

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
    public $failedBusinessCount;

    /**
     * @var int
     */
    public $failedRequestCount;

    /**
     * @var bool
     */
    public $hasReport;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestBps;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $responseBps;

    /**
     * @var int
     */
    public $seg90Rt;

    /**
     * @var int
     */
    public $status;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $totalAgents;

    /**
     * @var int
     */
    public $totalRealQps;

    /**
     * @var int
     */
    public $totalRequestCount;

    /**
     * @var int
     */
    public $tpsLimit;

    /**
     * @var int
     */
    public $vum;
    protected $_name = [
        'agentLocation' => 'AgentLocation',
        'aliveAgents' => 'AliveAgents',
        'averageRt' => 'AverageRt',
        'beginTime' => 'BeginTime',
        'chainMonitorDataList' => 'ChainMonitorDataList',
        'code' => 'Code',
        'concurrency' => 'Concurrency',
        'concurrencyLimit' => 'ConcurrencyLimit',
        'failedBusinessCount' => 'FailedBusinessCount',
        'failedRequestCount' => 'FailedRequestCount',
        'hasReport' => 'HasReport',
        'httpStatusCode' => 'HttpStatusCode',
        'message' => 'Message',
        'requestBps' => 'RequestBps',
        'requestId' => 'RequestId',
        'responseBps' => 'ResponseBps',
        'seg90Rt' => 'Seg90Rt',
        'status' => 'Status',
        'success' => 'Success',
        'totalAgents' => 'TotalAgents',
        'totalRealQps' => 'TotalRealQps',
        'totalRequestCount' => 'TotalRequestCount',
        'tpsLimit' => 'TpsLimit',
        'vum' => 'Vum',
    ];

    public function validate()
    {
        if (\is_array($this->agentLocation)) {
            Model::validateArray($this->agentLocation);
        }
        if (\is_array($this->chainMonitorDataList)) {
            Model::validateArray($this->chainMonitorDataList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentLocation) {
            if (\is_array($this->agentLocation)) {
                $res['AgentLocation'] = [];
                $n1 = 0;
                foreach ($this->agentLocation as $item1) {
                    $res['AgentLocation'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->chainMonitorDataList)) {
                $res['ChainMonitorDataList'] = [];
                $n1 = 0;
                foreach ($this->chainMonitorDataList as $item1) {
                    $res['ChainMonitorDataList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentLocation'])) {
            if (!empty($map['AgentLocation'])) {
                $model->agentLocation = [];
                $n1 = 0;
                foreach ($map['AgentLocation'] as $item1) {
                    $model->agentLocation[$n1] = agentLocation::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['ChainMonitorDataList'] as $item1) {
                    $model->chainMonitorDataList[$n1] = chainMonitorDataList::fromMap($item1);
                    ++$n1;
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
