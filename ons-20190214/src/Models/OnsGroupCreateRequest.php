<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Tea\Model;

class OnsGroupCreateRequest extends Model
{
    /**
     * @description The ID of the consumer group that you want to create. Specify the group ID based on the following rules:
     *
     *   The group ID must be 2 to 64 characters in length and can contain only letters, digits, hyphens (-), and underscores (\_).
     *   If the Message Queue for Apache RocketMQ instance in which you want to create the consumer group uses a namespace, the group ID must be unique in the instance. The group ID cannot be the same as an existing group ID or a topic name in the instance. The group ID can be the same as a group ID or a topic name in another instance that uses a different namespace. For example, if Instance A and Instance B use different namespaces, a group ID in Instance A can be the same as a group ID or a topic name in Instance B.
     *   If the instance does not use a namespace, the group ID must be globally unique across instances and regions. The group ID cannot be the same as an existing group ID or topic name in Message Queue for Apache RocketMQ instances that belong to your Alibaba Cloud account.
     *
     * >
     *
     *   After the consumer group is created, the group ID cannot be changed.
     *
     *   To check whether an instance uses a namespace, log on to the Message Queue for Apache RocketMQ console, go to the **Instance Details** page, and then view the value of the Namespace field in the **Basic Information** section.
     *
     * @example GID_test_groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The protocol over which clients in the consumer group communicate with the Message Queue for Apache RocketMQ broker. All clients in a consumer group communicate with the Message Queue for Apache RocketMQ broker over the same protocol. You must create different groups for TCP clients and HTTP clients. Valid values:
     *
     *   **tcp**: Clients in the consumer group consume messages over TCP. This is the default value.
     *   **http**: Clients in the consumer group consume messages over HTTP.
     *
     * @example tcp
     *
     * @var string
     */
    public $groupType;

    /**
     * @description The ID of the instance in which you want to create the consumer group.
     *
     * @example MQ_INST_111111111111_DOxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The description of the consumer group.
     *
     * @example test
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'groupId'    => 'GroupId',
        'groupType'  => 'GroupType',
        'instanceId' => 'InstanceId',
        'remark'     => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnsGroupCreateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
