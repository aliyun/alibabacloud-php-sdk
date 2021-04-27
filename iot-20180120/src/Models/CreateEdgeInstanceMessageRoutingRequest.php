<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateEdgeInstanceMessageRoutingRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $topicFilter;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $sourceData;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $targetData;

    /**
     * @var int
     */
    public $targetIotHubQos;
    protected $_name = [
        'iotInstanceId'   => 'IotInstanceId',
        'instanceId'      => 'InstanceId',
        'name'            => 'Name',
        'topicFilter'     => 'TopicFilter',
        'sourceType'      => 'SourceType',
        'sourceData'      => 'SourceData',
        'targetType'      => 'TargetType',
        'targetData'      => 'TargetData',
        'targetIotHubQos' => 'TargetIotHubQos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->topicFilter) {
            $res['TopicFilter'] = $this->topicFilter;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->sourceData) {
            $res['SourceData'] = $this->sourceData;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->targetData) {
            $res['TargetData'] = $this->targetData;
        }
        if (null !== $this->targetIotHubQos) {
            $res['TargetIotHubQos'] = $this->targetIotHubQos;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEdgeInstanceMessageRoutingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TopicFilter'])) {
            $model->topicFilter = $map['TopicFilter'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['SourceData'])) {
            $model->sourceData = $map['SourceData'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TargetData'])) {
            $model->targetData = $map['TargetData'];
        }
        if (isset($map['TargetIotHubQos'])) {
            $model->targetIotHubQos = $map['TargetIotHubQos'];
        }

        return $model;
    }
}
