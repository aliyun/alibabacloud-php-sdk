<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class CreateGroupIdRequest extends Model
{
    /**
     * @description The ID of the group that you want to create. The group ID must meet the following conventions:
     *
     *   The ID must be 7 to 64 characters in length. It must start with GID\_ or GID- and can contain only letters, digits, hyphens (-), and underscores (\_).
     *   The ID cannot be changed after the group is created. For more information, see [Terms](~~42420~~).
     *
     * @example GID_test
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the ApsaraMQ for MQTT instance to which the group belongs.
     *
     * @example mqtt-cn-0pp1ldu****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'groupId'    => 'GroupId',
        'instanceId' => 'InstanceId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGroupIdRequest
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

        return $model;
    }
}
