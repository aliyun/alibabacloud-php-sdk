<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\DescribeInstanceStatsInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example huabei
     *
     * @var string
     */
    public $districtId;

    /**
     * @example gcs.r1c1m1.1xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 1
     *
     * @var int
     */
    public $operatingInstanceCount;

    /**
     * @example 6733705348307226241003
     *
     * @var string
     */
    public $projectId;

    /**
     * @example 1
     *
     * @var int
     */
    public $releasingInstanceCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $reservingInstanceCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $runningInstanceCount;

    /**
     * @example 4
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'districtId'             => 'DistrictId',
        'instanceType'           => 'InstanceType',
        'operatingInstanceCount' => 'OperatingInstanceCount',
        'projectId'              => 'ProjectId',
        'releasingInstanceCount' => 'ReleasingInstanceCount',
        'reservingInstanceCount' => 'ReservingInstanceCount',
        'runningInstanceCount'   => 'RunningInstanceCount',
        'totalCount'             => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->districtId) {
            $res['DistrictId'] = $this->districtId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->operatingInstanceCount) {
            $res['OperatingInstanceCount'] = $this->operatingInstanceCount;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->releasingInstanceCount) {
            $res['ReleasingInstanceCount'] = $this->releasingInstanceCount;
        }
        if (null !== $this->reservingInstanceCount) {
            $res['ReservingInstanceCount'] = $this->reservingInstanceCount;
        }
        if (null !== $this->runningInstanceCount) {
            $res['RunningInstanceCount'] = $this->runningInstanceCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DistrictId'])) {
            $model->districtId = $map['DistrictId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['OperatingInstanceCount'])) {
            $model->operatingInstanceCount = $map['OperatingInstanceCount'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ReleasingInstanceCount'])) {
            $model->releasingInstanceCount = $map['ReleasingInstanceCount'];
        }
        if (isset($map['ReservingInstanceCount'])) {
            $model->reservingInstanceCount = $map['ReservingInstanceCount'];
        }
        if (isset($map['RunningInstanceCount'])) {
            $model->runningInstanceCount = $map['RunningInstanceCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
