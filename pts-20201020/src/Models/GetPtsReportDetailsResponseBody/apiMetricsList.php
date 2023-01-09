<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class apiMetricsList extends Model
{
    /**
     * @example 1000
     *
     * @var int
     */
    public $allCount;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @example 34.5
     *
     * @var float
     */
    public $avgRt;

    /**
     * @example 55
     *
     * @var float
     */
    public $avgTps;

    /**
     * @example 30
     *
     * @var int
     */
    public $failCountBiz;

    /**
     * @example 40
     *
     * @var int
     */
    public $failCountReq;

    /**
     * @example 50
     *
     * @var float
     */
    public $maxRt;

    /**
     * @example 10
     *
     * @var float
     */
    public $minRt;

    /**
     * @example 39
     *
     * @var float
     */
    public $seg50Rt;

    /**
     * @example 26
     *
     * @var float
     */
    public $seg75Rt;

    /**
     * @example 23
     *
     * @var float
     */
    public $seg90Rt;

    /**
     * @example 35
     *
     * @var float
     */
    public $seg99Rt;

    /**
     * @example 0.98
     *
     * @var float
     */
    public $successRateBiz;

    /**
     * @example 0.99
     *
     * @var float
     */
    public $successRateReq;
    protected $_name = [
        'allCount'       => 'AllCount',
        'apiName'        => 'ApiName',
        'avgRt'          => 'AvgRt',
        'avgTps'         => 'AvgTps',
        'failCountBiz'   => 'FailCountBiz',
        'failCountReq'   => 'FailCountReq',
        'maxRt'          => 'MaxRt',
        'minRt'          => 'MinRt',
        'seg50Rt'        => 'Seg50Rt',
        'seg75Rt'        => 'Seg75Rt',
        'seg90Rt'        => 'Seg90Rt',
        'seg99Rt'        => 'Seg99Rt',
        'successRateBiz' => 'SuccessRateBiz',
        'successRateReq' => 'SuccessRateReq',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allCount) {
            $res['AllCount'] = $this->allCount;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->avgRt) {
            $res['AvgRt'] = $this->avgRt;
        }
        if (null !== $this->avgTps) {
            $res['AvgTps'] = $this->avgTps;
        }
        if (null !== $this->failCountBiz) {
            $res['FailCountBiz'] = $this->failCountBiz;
        }
        if (null !== $this->failCountReq) {
            $res['FailCountReq'] = $this->failCountReq;
        }
        if (null !== $this->maxRt) {
            $res['MaxRt'] = $this->maxRt;
        }
        if (null !== $this->minRt) {
            $res['MinRt'] = $this->minRt;
        }
        if (null !== $this->seg50Rt) {
            $res['Seg50Rt'] = $this->seg50Rt;
        }
        if (null !== $this->seg75Rt) {
            $res['Seg75Rt'] = $this->seg75Rt;
        }
        if (null !== $this->seg90Rt) {
            $res['Seg90Rt'] = $this->seg90Rt;
        }
        if (null !== $this->seg99Rt) {
            $res['Seg99Rt'] = $this->seg99Rt;
        }
        if (null !== $this->successRateBiz) {
            $res['SuccessRateBiz'] = $this->successRateBiz;
        }
        if (null !== $this->successRateReq) {
            $res['SuccessRateReq'] = $this->successRateReq;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiMetricsList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllCount'])) {
            $model->allCount = $map['AllCount'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['AvgRt'])) {
            $model->avgRt = $map['AvgRt'];
        }
        if (isset($map['AvgTps'])) {
            $model->avgTps = $map['AvgTps'];
        }
        if (isset($map['FailCountBiz'])) {
            $model->failCountBiz = $map['FailCountBiz'];
        }
        if (isset($map['FailCountReq'])) {
            $model->failCountReq = $map['FailCountReq'];
        }
        if (isset($map['MaxRt'])) {
            $model->maxRt = $map['MaxRt'];
        }
        if (isset($map['MinRt'])) {
            $model->minRt = $map['MinRt'];
        }
        if (isset($map['Seg50Rt'])) {
            $model->seg50Rt = $map['Seg50Rt'];
        }
        if (isset($map['Seg75Rt'])) {
            $model->seg75Rt = $map['Seg75Rt'];
        }
        if (isset($map['Seg90Rt'])) {
            $model->seg90Rt = $map['Seg90Rt'];
        }
        if (isset($map['Seg99Rt'])) {
            $model->seg99Rt = $map['Seg99Rt'];
        }
        if (isset($map['SuccessRateBiz'])) {
            $model->successRateBiz = $map['SuccessRateBiz'];
        }
        if (isset($map['SuccessRateReq'])) {
            $model->successRateReq = $map['SuccessRateReq'];
        }

        return $model;
    }
}
