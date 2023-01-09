<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneBaseLineResponseBody\baseline;

use AlibabaCloud\Tea\Model;

class apiBaselines extends Model
{
    /**
     * @example 10
     *
     * @var float
     */
    public $avgRt;

    /**
     * @example 1000
     *
     * @var float
     */
    public $avgTps;

    /**
     * @example 100
     *
     * @var int
     */
    public $failCountBiz;

    /**
     * @example 100
     *
     * @var int
     */
    public $failCountReq;

    /**
     * @example 76543
     *
     * @var int
     */
    public $id;

    /**
     * @example 50
     *
     * @var int
     */
    public $maxRt;

    /**
     * @example 8
     *
     * @var int
     */
    public $minRt;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 40
     *
     * @var float
     */
    public $seg90Rt;

    /**
     * @example 50
     *
     * @var float
     */
    public $seg99Rt;

    /**
     * @example 0.1
     *
     * @var float
     */
    public $successRateBiz;

    /**
     * @example 0.9
     *
     * @var float
     */
    public $successRateReq;
    protected $_name = [
        'avgRt'          => 'AvgRt',
        'avgTps'         => 'AvgTps',
        'failCountBiz'   => 'FailCountBiz',
        'failCountReq'   => 'FailCountReq',
        'id'             => 'Id',
        'maxRt'          => 'MaxRt',
        'minRt'          => 'MinRt',
        'name'           => 'Name',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->maxRt) {
            $res['MaxRt'] = $this->maxRt;
        }
        if (null !== $this->minRt) {
            $res['MinRt'] = $this->minRt;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
     * @return apiBaselines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MaxRt'])) {
            $model->maxRt = $map['MaxRt'];
        }
        if (isset($map['MinRt'])) {
            $model->minRt = $map['MinRt'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
