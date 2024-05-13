<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeIpLocationServiceResponseBody;

use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example i-bp1cb6x80tfgocid****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance.
     *
     * @example launch-advisor-2021****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The type of the asset. Valid values:
     *
     *   ecs: ECS instance
     *   slb: SLB instance
     *   EIP: EIP
     *
     * @example ecs
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The IP address of the asset.
     *
     * @example 121.199.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The region to which the public IP address of the asset belongs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceType' => 'InstanceType',
        'internetIp'   => 'InternetIp',
        'region'       => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
