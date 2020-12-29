<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\Tea\Model;

class DescribeFlowgraphRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $eagleEyeTraceId;

    /**
     * @var string
     */
    public $eagleEyeRpcId;

    /**
     * @var string
     */
    public $eagleEyeUserData;

    /**
     * @var string
     */
    public $ddosRegionId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $days;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;
    protected $_name = [
        'sourceIp'         => 'SourceIp',
        'lang'             => 'Lang',
        'eagleEyeTraceId'  => 'eagleEyeTraceId',
        'eagleEyeRpcId'    => 'eagleEyeRpcId',
        'eagleEyeUserData' => 'eagleEyeUserData',
        'ddosRegionId'     => 'DdosRegionId',
        'instanceType'     => 'InstanceType',
        'instanceId'       => 'InstanceId',
        'days'             => 'Days',
        'startTime'        => 'StartTime',
        'endTime'          => 'EndTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->eagleEyeTraceId) {
            $res['eagleEyeTraceId'] = $this->eagleEyeTraceId;
        }
        if (null !== $this->eagleEyeRpcId) {
            $res['eagleEyeRpcId'] = $this->eagleEyeRpcId;
        }
        if (null !== $this->eagleEyeUserData) {
            $res['eagleEyeUserData'] = $this->eagleEyeUserData;
        }
        if (null !== $this->ddosRegionId) {
            $res['DdosRegionId'] = $this->ddosRegionId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->days) {
            $res['Days'] = $this->days;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlowgraphRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['eagleEyeTraceId'])) {
            $model->eagleEyeTraceId = $map['eagleEyeTraceId'];
        }
        if (isset($map['eagleEyeRpcId'])) {
            $model->eagleEyeRpcId = $map['eagleEyeRpcId'];
        }
        if (isset($map['eagleEyeUserData'])) {
            $model->eagleEyeUserData = $map['eagleEyeUserData'];
        }
        if (isset($map['DdosRegionId'])) {
            $model->ddosRegionId = $map['DdosRegionId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Days'])) {
            $model->days = $map['Days'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        return $model;
    }
}
