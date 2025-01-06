<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class UpdateTopicConfigRequest extends Model
{
    /**
     * @description The key of the topic configuration.
     *
     *   For reserved instances, you can modify only the configurations of the topics that use local storage.
     *   For serverless instances, you can modify the configurations of all topics.
     *   Reserved instances whose topics use local storage support the following keys: retention.ms, max.message.bytes, replications, message.timestamp.type, and message.timestamp.difference.max.ms.``
     *   Serverless instances support the following keys: retention.hours, max.message.bytes, message.timestamp.type, message.timestamp.difference.max.ms.
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
     * @description The value of the topic configuration.
     *
     *   Serverless instances support the following values:
     *
     *   `retention.hours`: the message retention period. Value type: string. Valid values: 24 to 8760.
     *   `max.message.bytes`: the maximum size of a sent message. Value type: string. Valid values: 1048576 to 10485760.
     *   `message.timestamp.type`: the timestamp type of a message. Valid values: CreateTime and LogAppendTime. The value CreateTime specifies the timestamp that is specified by the producer when the message is sent. The value LogAppendTime specifies the time when the broker appends the message to its log. If you do not specify this parameter, the time when the message is created on the client is used.
     *   `message.timestamp.difference.max.ms`: the maximum positive or negative difference allowed between the timestamp when the broker receives a message and the timestamp specified in the message. If you set message.timestamp.type to CreateTime, **a message is rejected** if the difference in timestamp exceeds the threshold. If you set message.timestamp.type to LogAppendTime, this configuration does not take effect.
     *
     *   Reserved instances support the following values:
     *
     *   `retention.ms`: the message retention period. Value type: string. Valid values: 3600000 to 31536000000.
     *   `max.message.bytes`: the maximum size of a sent message. Value type: string. Valid values: 1048576 to 10485760.
     *   `replications`: the number of replicas. Value type: string. Valid values: 1 to 3.
     *   `message.timestamp.type`: the timestamp type of a message. Valid values: CreateTime and LogAppendTime. The value CreateTime specifies the timestamp that is specified by the producer when the message is sent. The value LogAppendTime specifies the time when the broker appends the message to its log. If you do not specify this parameter, the time when the message is created on the client is used.
     *   `message.timestamp.difference.max.ms`: the maximum positive or negative difference allowed between the timestamp when the broker receives a message and the timestamp specified in the message. If you set message.timestamp.type to CreateTime, **a message is rejected** if the difference in timestamp exceeds the threshold. If you set message.timestamp.type to LogAppendTime, this configuration does not take effect.
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
