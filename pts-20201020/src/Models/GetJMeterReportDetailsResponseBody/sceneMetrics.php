<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetJMeterReportDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class sceneMetrics extends Model
{
    /**
     * @example 717
     *
     * @var int
     */
    public $allCount;

    /**
     * @example 23
     *
     * @var float
     */
    public $avgRt;

    /**
     * @example 78
     *
     * @var float
     */
    public $avgTps;

    /**
     * @example 34
     *
     * @var int
     */
    public $failCountReq;

    /**
     * @example 35
     *
     * @var float
     */
    public $seg90Rt;

    /**
     * @example 56
     *
     * @var float
     */
    public $seg99Rt;

    /**
     * @example 0.99
     *
     * @var float
     */
    public $successRateReq;
    protected $_name = [
        'allCount'       => 'AllCount',
        'avgRt'          => 'AvgRt',
        'avgTps'         => 'AvgTps',
        'failCountReq'   => 'FailCountReq',
        'seg90Rt'        => 'Seg90Rt',
        'seg99Rt'        => 'Seg99Rt',
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
        if (null !== $this->avgRt) {
            $res['AvgRt'] = $this->avgRt;
        }
        if (null !== $this->avgTps) {
            $res['AvgTps'] = $this->avgTps;
        }
        if (null !== $this->failCountReq) {
            $res['FailCountReq'] = $this->failCountReq;
        }
        if (null !== $this->seg90Rt) {
            $res['Seg90Rt'] = $this->seg90Rt;
        }
        if (null !== $this->seg99Rt) {
            $res['Seg99Rt'] = $this->seg99Rt;
        }
        if (null !== $this->successRateReq) {
            $res['SuccessRateReq'] = $this->successRateReq;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sceneMetrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllCount'])) {
            $model->allCount = $map['AllCount'];
        }
        if (isset($map['AvgRt'])) {
            $model->avgRt = $map['AvgRt'];
        }
        if (isset($map['AvgTps'])) {
            $model->avgTps = $map['AvgTps'];
        }
        if (isset($map['FailCountReq'])) {
            $model->failCountReq = $map['FailCountReq'];
        }
        if (isset($map['Seg90Rt'])) {
            $model->seg90Rt = $map['Seg90Rt'];
        }
        if (isset($map['Seg99Rt'])) {
            $model->seg99Rt = $map['Seg99Rt'];
        }
        if (isset($map['SuccessRateReq'])) {
            $model->successRateReq = $map['SuccessRateReq'];
        }

        return $model;
    }
}
