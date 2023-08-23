<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Tea\Model;

class OnsTopicCreateRequest extends Model
{
    /**
     * @description The ID of the instance in which you want to create the topic.
     *
     * @example MQ_INST_188077086902****_BXSuW61e
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of messages that you want to publish to the topic. Valid values:
     *
     *   **0**: normal messages
     *   **1**: partitionally ordered messages
     *   **2**: globally ordered messages
     *   **4**: transactional messages
     *   **5**: scheduled or delayed messages
     *
     * For more information about message types, see [Message types](~~155952~~).
     * @example 0
     *
     * @var int
     */
    public $messageType;

    /**
     * @description The description of the topic that you want to create.
     *
     * @example Test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The name of the topic that you want to create. The name must meet the following rules:
     *
     *   The name must be 3 to 64 characters in length and can contain letters, digits, hyphens (-), and underscores (\_).
     *   The topic name cannot start with CID or GID because CID and GID are reserved prefixes for group IDs.
     *   If the ApsaraMQ for RocketMQ instance in which you want to create the topic uses a namespace, the topic name must be unique in the instance. The topic name cannot be the same as an existing topic name or a group ID in the instance. The topic name can be the same as a topic name or a group ID in another instance that uses a different namespace. For example, if Instance A and Instance B use different namespaces, a topic name in Instance A can be the same as a topic name or a group ID in Instance B.
     *   If the instance in which you want to create the topic does not use a namespace, the topic name must be globally unique across instances and regions. The topic name cannot be the same as an existing topic name or group ID in all ApsaraMQ for RocketMQ instances that belong to your Alibaba Cloud account.
     *
     * > To check whether an instance uses a namespace, log on to the ApsaraMQ for RocketMQ console, go to the **Instance Details** page, and then view the value of the Namespace field in the **Basic Information** section.
     * @example test
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'messageType' => 'MessageType',
        'remark'      => 'Remark',
        'topic'       => 'Topic',
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
        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnsTopicCreateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
