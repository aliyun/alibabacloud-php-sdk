<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateEdgeInstanceMessageRoutingRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $routeId;

    /**
     * @var string
     */
    public $sourceData;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $targetData;

    /**
     * @var int
     */
    public $targetIotHubQos;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $topicFilter;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'iotInstanceId'   => 'IotInstanceId',
        'name'            => 'Name',
        'routeId'         => 'RouteId',
        'sourceData'      => 'SourceData',
        'sourceType'      => 'SourceType',
        'targetData'      => 'TargetData',
        'targetIotHubQos' => 'TargetIotHubQos',
        'targetType'      => 'TargetType',
        'topicFilter'     => 'TopicFilter',
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
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->routeId) {
            $res['RouteId'] = $this->routeId;
        }
        if (null !== $this->sourceData) {
            $res['SourceData'] = $this->sourceData;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->targetData) {
            $res['TargetData'] = $this->targetData;
        }
        if (null !== $this->targetIotHubQos) {
            $res['TargetIotHubQos'] = $this->targetIotHubQos;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->topicFilter) {
            $res['TopicFilter'] = $this->topicFilter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEdgeInstanceMessageRoutingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RouteId'])) {
            $model->routeId = $map['RouteId'];
        }
        if (isset($map['SourceData'])) {
            $model->sourceData = $map['SourceData'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['TargetData'])) {
            $model->targetData = $map['TargetData'];
        }
        if (isset($map['TargetIotHubQos'])) {
            $model->targetIotHubQos = $map['TargetIotHubQos'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TopicFilter'])) {
            $model->topicFilter = $map['TopicFilter'];
        }

        return $model;
    }
}
