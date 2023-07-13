<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateDeviceGroupRequest extends Model
{
    /**
     * @description The description of the group. The description must be 1 to 100 characters in length.
     *
     * @example Group test
     *
     * @var string
     */
    public $groupDesc;

    /**
     * @description The name of the group. The alias must be 4 to 30 characters in length, and can contain letters, digits, and underscores (\_).
     *
     * @example grouptest
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The ID of the instance. You can view the instance **ID** on the **Overview** page in the IoT Platform console.
     *
     *
     *
     * >*   If your instance has an ID, you must configure this parameter. If you do not set this parameter, the call fails.
     * >*   If your instance has no **Overview** page or ID, you do not need to set this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The ID of the parent group.
     *
     * If you need to create a first-level group, do not specify this parameter.
     * @example SuperGroupId1
     *
     * @var string
     */
    public $superGroupId;
    protected $_name = [
        'groupDesc'     => 'GroupDesc',
        'groupName'     => 'GroupName',
        'iotInstanceId' => 'IotInstanceId',
        'superGroupId'  => 'SuperGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupDesc) {
            $res['GroupDesc'] = $this->groupDesc;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->superGroupId) {
            $res['SuperGroupId'] = $this->superGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDeviceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupDesc'])) {
            $model->groupDesc = $map['GroupDesc'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['SuperGroupId'])) {
            $model->superGroupId = $map['SuperGroupId'];
        }

        return $model;
    }
}
