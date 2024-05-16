<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class UpdateTopicConfigRequest extends Model
{
    /**
     * @description The key of the topic configuration.
     *
     *   ApsaraMQ for Kafka V2 instances allow you to modify configurations only for topics that use local storage.
     *   ApsaraMQ for Kafka V3 instances allow you to modify configurations for all topics.
     *   The following keys are supported by `local topic` of ApsaraMQ for Kafka V2 instances: retention.ms, retention.bytes, and replications.
     *   The following keys are supported by ApsaraMQ for Kafka V3 instances: retention.hours and max.message.bytes.
     *
     * This parameter is required.
     * @example replications
     *
     * @var string
     */
    public $config;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example alikafka_post-cn-v0h1fgs2****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the region where the instance resides.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The topic name.
     *
     * This parameter is required.
     * @example dqc_test2
     *
     * @var string
     */
    public $topic;

    /**
     * @description The configuration item that you want to update for the topic. The following configuration items are supported by ApsaraMQ for Kafka V3 instances:
     *
     *   `retention.hours` specifies the message retention period. Value type: string. Valid values: 24 to 8760.
     *   `max.message.bytes` specifies the maximum size of a sent message. Value type: string. Valid values: 1048576 to 10485760.
     *
     * This parameter is required.
     * @example 3
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'config'     => 'Config',
        'instanceId' => 'InstanceId',
        'regionId'   => 'RegionId',
        'topic'      => 'Topic',
        'value'      => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTopicConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
