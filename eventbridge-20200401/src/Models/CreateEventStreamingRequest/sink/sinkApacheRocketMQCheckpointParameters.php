<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkApacheRocketMQCheckpointParameters\consumeTimestamp;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkApacheRocketMQCheckpointParameters\group;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkApacheRocketMQCheckpointParameters\topic;
use AlibabaCloud\Tea\Model;

class sinkApacheRocketMQCheckpointParameters extends Model
{
    /**
     * @var consumeTimestamp
     */
    public $consumeTimestamp;

    /**
     * @var group
     */
    public $group;

    /**
     * @var string
     */
    public $instanceEndpoint;

    /**
     * @var string
     */
    public $instancePassword;

    /**
     * @var string
     */
    public $instanceUsername;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var topic
     */
    public $topic;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'consumeTimestamp' => 'ConsumeTimestamp',
        'group' => 'Group',
        'instanceEndpoint' => 'InstanceEndpoint',
        'instancePassword' => 'InstancePassword',
        'instanceUsername' => 'InstanceUsername',
        'networkType' => 'NetworkType',
        'securityGroupId' => 'SecurityGroupId',
        'topic' => 'Topic',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumeTimestamp) {
            $res['ConsumeTimestamp'] = null !== $this->consumeTimestamp ? $this->consumeTimestamp->toMap() : null;
        }
        if (null !== $this->group) {
            $res['Group'] = null !== $this->group ? $this->group->toMap() : null;
        }
        if (null !== $this->instanceEndpoint) {
            $res['InstanceEndpoint'] = $this->instanceEndpoint;
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
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->topic) {
            $res['Topic'] = null !== $this->topic ? $this->topic->toMap() : null;
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
     * @return sinkApacheRocketMQCheckpointParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumeTimestamp'])) {
            $model->consumeTimestamp = consumeTimestamp::fromMap($map['ConsumeTimestamp']);
        }
        if (isset($map['Group'])) {
            $model->group = group::fromMap($map['Group']);
        }
        if (isset($map['InstanceEndpoint'])) {
            $model->instanceEndpoint = $map['InstanceEndpoint'];
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
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Topic'])) {
            $model->topic = topic::fromMap($map['Topic']);
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
