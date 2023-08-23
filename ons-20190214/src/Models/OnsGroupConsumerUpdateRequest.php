<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Tea\Model;

class OnsGroupConsumerUpdateRequest extends Model
{
    /**
     * @description The ID of the consumer group for which you want to configure read permissions.
     *
     * @example GID_test_groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the instance to which the consumer group you want to configure belongs.
     *
     * @example MQ_INST_111111111111_DOxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Specifies whether to authorize the consumer group to read messages. Valid values:
     *
     *   **true**: The consumer group can read messages.
     *   **false**: The consumer group cannot read messages.
     *
     * Default value: **true**.
     * @example true
     *
     * @var bool
     */
    public $readEnable;
    protected $_name = [
        'groupId'    => 'GroupId',
        'instanceId' => 'InstanceId',
        'readEnable' => 'ReadEnable',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->readEnable) {
            $res['ReadEnable'] = $this->readEnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnsGroupConsumerUpdateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ReadEnable'])) {
            $model->readEnable = $map['ReadEnable'];
        }

        return $model;
    }
}
