<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateDeviceGroupRequest extends Model
{
    /**
     * @description The description of the group. The description must be 1 to 100 characters in length.
     *
     * @example test2
     *
     * @var string
     */
    public $groupDesc;

    /**
     * @description The ID of the group. The ID is the globally unique identifier (GUID) for the group.
     *
     * @example W16X8Tvdosec****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The type of the group.
     *
     * If you set the value to **LINK_PLATFORM_DYNAMIC**, a dynamic group is queried. If you do not specify this parameter, a static group is queried by default.
     * @example LINK_PLATFORM_DYNAMIC
     *
     * @var string
     */
    public $groupType;

    /**
     * @description The ID of the instance. You can view the instance **ID** on the **Overview** page in the IoT Platform console.
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
    protected $_name = [
        'groupDesc'     => 'GroupDesc',
        'groupId'       => 'GroupId',
        'groupType'     => 'GroupType',
        'iotInstanceId' => 'IotInstanceId',
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
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDeviceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupDesc'])) {
            $model->groupDesc = $map['GroupDesc'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
