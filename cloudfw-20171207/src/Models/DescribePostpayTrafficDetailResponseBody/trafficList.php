<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePostpayTrafficDetailResponseBody;

use AlibabaCloud\Tea\Model;

class trafficList extends Model
{
    /**
     * @example 1115096939
     *
     * @var int
     */
    public $inBytes;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @example 100000000
     *
     * @var int
     */
    public $outBytes;

    /**
     * @example 39.106.146.214
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example 1215096939
     *
     * @var int
     */
    public $totalBytes;

    /**
     * @example 20231001
     *
     * @var string
     */
    public $trafficDay;

    /**
     * @example EIP_TRAFFIC
     *
     * @var string
     */
    public $trafficType;
    protected $_name = [
        'inBytes'      => 'InBytes',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'outBytes'     => 'OutBytes',
        'resourceId'   => 'ResourceId',
        'totalBytes'   => 'TotalBytes',
        'trafficDay'   => 'TrafficDay',
        'trafficType'  => 'TrafficType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inBytes) {
            $res['InBytes'] = $this->inBytes;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->outBytes) {
            $res['OutBytes'] = $this->outBytes;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->totalBytes) {
            $res['TotalBytes'] = $this->totalBytes;
        }
        if (null !== $this->trafficDay) {
            $res['TrafficDay'] = $this->trafficDay;
        }
        if (null !== $this->trafficType) {
            $res['TrafficType'] = $this->trafficType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InBytes'])) {
            $model->inBytes = $map['InBytes'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['OutBytes'])) {
            $model->outBytes = $map['OutBytes'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['TotalBytes'])) {
            $model->totalBytes = $map['TotalBytes'];
        }
        if (isset($map['TrafficDay'])) {
            $model->trafficDay = $map['TrafficDay'];
        }
        if (isset($map['TrafficType'])) {
            $model->trafficType = $map['TrafficType'];
        }

        return $model;
    }
}
