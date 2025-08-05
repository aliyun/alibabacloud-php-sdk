<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source;

use AlibabaCloud\Tea\Model;

class sourceApacheRocketMQCheckpointParameters extends Model
{
    /**
     * @example registry-vpc.cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $instanceEndpoint;

    /**
     * @description The ID of the Apache RocketMQ instance.
     *
     * @example MQ_INST_164901546557****_BAAN****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 123456
     *
     * @var string
     */
    public $instancePassword;

    /**
     * @example admin
     *
     * @var string
     */
    public $instanceUsername;

    /**
     * @example PrivateNetwork
     *
     * @var string
     */
    public $networkType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example sg-mw43*****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string[]
     */
    public $topics;

    /**
     * @example vsw-dwaafds****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description VPC ID。
     *
     * @example vpc-adw1awdw*****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'instanceEndpoint' => 'InstanceEndpoint',
        'instanceId' => 'InstanceId',
        'instancePassword' => 'InstancePassword',
        'instanceUsername' => 'InstanceUsername',
        'networkType' => 'NetworkType',
        'regionId' => 'RegionId',
        'securityGroupId' => 'SecurityGroupId',
        'topics' => 'Topics',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceEndpoint) {
            $res['InstanceEndpoint'] = $this->instanceEndpoint;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instancePassword) {
            $res['InstancePassword'] = $this->instancePassword;
        }
        if (null !== $this->instanceUsername) {
            $res['InstanceUsername'] = $this->instanceUsername;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->topics) {
            $res['Topics'] = $this->topics;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceApacheRocketMQCheckpointParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceEndpoint'])) {
            $model->instanceEndpoint = $map['InstanceEndpoint'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstancePassword'])) {
            $model->instancePassword = $map['InstancePassword'];
        }
        if (isset($map['InstanceUsername'])) {
            $model->instanceUsername = $map['InstanceUsername'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Topics'])) {
            if (!empty($map['Topics'])) {
                $model->topics = $map['Topics'];
            }
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
