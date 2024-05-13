<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\Tea\Model;

class DescribeIpDdosThresholdRequest extends Model
{
    /**
     * @description The region ID of the asset.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $ddosRegionId;

    /**
     * @description The type of the threshold. Valid values:
     *
     *   **defense**: traffic scrubbing threshold
     *   **blackhole**: DDoS mitigation threshold
     *
     * This parameter is required.
     * @example defense
     *
     * @var string
     */
    public $ddosType;

    /**
     * @description The ID of the asset.
     *
     * This parameter is required.
     * @example i-bp1i88rqjza51s****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the asset. Valid values:
     *
     *   **ecs**: ECS instance
     *   **slb**: SLB instance
     *   **eip**: EIP
     *
     * This parameter is required.
     * @example ecs
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The IP address of the asset.
     *
     * This parameter is required.
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $internetIp;
    protected $_name = [
        'ddosRegionId' => 'DdosRegionId',
        'ddosType'     => 'DdosType',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'internetIp'   => 'InternetIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ddosRegionId) {
            $res['DdosRegionId'] = $this->ddosRegionId;
        }
        if (null !== $this->ddosType) {
            $res['DdosType'] = $this->ddosType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpDdosThresholdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DdosRegionId'])) {
            $model->ddosRegionId = $map['DdosRegionId'];
        }
        if (isset($map['DdosType'])) {
            $model->ddosType = $map['DdosType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }

        return $model;
    }
}
