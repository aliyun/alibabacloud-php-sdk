<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneRunningDataResponseBody;

use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneRunningDataResponseBody\chainMonitorDataList\checkPointResult;
use AlibabaCloud\Tea\Model;

class chainMonitorDataList extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var int
     */
    public $averageRt;

    /**
     * @var checkPointResult
     */
    public $checkPointResult;

    /**
     * @var float
     */
    public $concurrency;

    /**
     * @var int
     */
    public $configQps;

    /**
     * @var int
     */
    public $count2XX;

    /**
     * @var int
     */
    public $failedCount;

    /**
     * @var float
     */
    public $failedQps;

    /**
     * @var int
     */
    public $maxRt;

    /**
     * @var int
     */
    public $minRt;

    /**
     * @var int
     */
    public $nodeId;

    /**
     * @var float
     */
    public $qps2XX;

    /**
     * @var float
     */
    public $realQps;

    /**
     * @var int
     */
    public $timePoint;
    protected $_name = [
        'apiId'            => 'ApiId',
        'apiName'          => 'ApiName',
        'averageRt'        => 'AverageRt',
        'checkPointResult' => 'CheckPointResult',
        'concurrency'      => 'Concurrency',
        'configQps'        => 'ConfigQps',
        'count2XX'         => 'Count2XX',
        'failedCount'      => 'FailedCount',
        'failedQps'        => 'FailedQps',
        'maxRt'            => 'MaxRt',
        'minRt'            => 'MinRt',
        'nodeId'           => 'NodeId',
        'qps2XX'           => 'Qps2XX',
        'realQps'          => 'RealQps',
        'timePoint'        => 'TimePoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->averageRt) {
            $res['AverageRt'] = $this->averageRt;
        }
        if (null !== $this->checkPointResult) {
            $res['CheckPointResult'] = null !== $this->checkPointResult ? $this->checkPointResult->toMap() : null;
        }
        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }
        if (null !== $this->configQps) {
            $res['ConfigQps'] = $this->configQps;
        }
        if (null !== $this->count2XX) {
            $res['Count2XX'] = $this->count2XX;
        }
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }
        if (null !== $this->failedQps) {
            $res['FailedQps'] = $this->failedQps;
        }
        if (null !== $this->maxRt) {
            $res['MaxRt'] = $this->maxRt;
        }
        if (null !== $this->minRt) {
            $res['MinRt'] = $this->minRt;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->qps2XX) {
            $res['Qps2XX'] = $this->qps2XX;
        }
        if (null !== $this->realQps) {
            $res['RealQps'] = $this->realQps;
        }
        if (null !== $this->timePoint) {
            $res['TimePoint'] = $this->timePoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return chainMonitorDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['AverageRt'])) {
            $model->averageRt = $map['AverageRt'];
        }
        if (isset($map['CheckPointResult'])) {
            $model->checkPointResult = checkPointResult::fromMap($map['CheckPointResult']);
        }
        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }
        if (isset($map['ConfigQps'])) {
            $model->configQps = $map['ConfigQps'];
        }
        if (isset($map['Count2XX'])) {
            $model->count2XX = $map['Count2XX'];
        }
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }
        if (isset($map['FailedQps'])) {
            $model->failedQps = $map['FailedQps'];
        }
        if (isset($map['MaxRt'])) {
            $model->maxRt = $map['MaxRt'];
        }
        if (isset($map['MinRt'])) {
            $model->minRt = $map['MinRt'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Qps2XX'])) {
            $model->qps2XX = $map['Qps2XX'];
        }
        if (isset($map['RealQps'])) {
            $model->realQps = $map['RealQps'];
        }
        if (isset($map['TimePoint'])) {
            $model->timePoint = $map['TimePoint'];
        }

        return $model;
    }
}
