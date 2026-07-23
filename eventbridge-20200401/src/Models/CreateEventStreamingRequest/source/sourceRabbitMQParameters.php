<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\source;

use AlibabaCloud\Dara\Model;

class sourceRabbitMQParameters extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $vSwitchIds;

    /**
     * @var string
     */
    public $virtualHostName;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'networkType' => 'NetworkType',
        'queueName' => 'QueueName',
        'regionId' => 'RegionId',
        'securityGroupId' => 'SecurityGroupId',
        'vSwitchIds' => 'VSwitchIds',
        'virtualHostName' => 'VirtualHostName',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }

        if (null !== $this->virtualHostName) {
            $res['VirtualHostName'] = $this->virtualHostName;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = $map['VSwitchIds'];
        }

        if (isset($map['VirtualHostName'])) {
            $model->virtualHostName = $map['VirtualHostName'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
