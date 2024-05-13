<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\Tea\Model;

class DescribeCapRequest extends Model
{
    /**
     * @description The start time of the DDoS attack event. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * This parameter is required.
     * @example 1637812279000
     *
     * @var int
     */
    public $begTime;

    /**
     * @description The region ID of the asset that is under DDoS attacks. The asset is assigned a public IP address.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $ddosRegionId;

    /**
     * @description The ID of the asset that is under DDoS attacks.
     *
     * This parameter is required.
     * @example i-bp10bclrt56fblts****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the asset that is under DDoS attacks. Valid values:
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
     * @description The public IP address of the asset that is under DDoS attacks.
     *
     * @example 121.199.XX.XX
     *
     * @var string
     */
    public $internetIp;
    protected $_name = [
        'begTime'      => 'BegTime',
        'ddosRegionId' => 'DdosRegionId',
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
        if (null !== $this->begTime) {
            $res['BegTime'] = $this->begTime;
        }
        if (null !== $this->ddosRegionId) {
            $res['DdosRegionId'] = $this->ddosRegionId;
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
     * @return DescribeCapRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BegTime'])) {
            $model->begTime = $map['BegTime'];
        }
        if (isset($map['DdosRegionId'])) {
            $model->ddosRegionId = $map['DdosRegionId'];
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
