<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class SetDeviceGroupTagsRequest extends Model
{
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
     * You do not need to configure this parameter.
     * @example LINK_PLATFORM_DYNAMIC
     *
     * @var string
     */
    public $groupType;

    /**
     * @description The ID of the instance. On the **Overview** page in the IoT Platform console, you can view the **ID** of the instance.
     *
     *
     * >*   If your instance has an ID, you must specify the ID for this parameter. Otherwise, the call fails.
     * >*   If the **Overview** page or instance ID is not displayed in the IoT Platform console, you do not need to configure this parameter.
     *
     * For more information about the instance, see [Overview](~~356505~~).
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The tag data in the JSON format. The TagString parameter specifies multiple tags in the format of key-value pairs. You must specify **tagKey** and **tagValue** for each tag.
     *
     *   **tagKey**: the tag key. The key must be 2 to 30 characters in length, and can contain letters, digits, and periods (.).
     *   **tagValue**: the tag value. Each value can contain letters, digits, underscores (\_), and hyphens (-). The value must be 1 to 128 characters in length.
     *
     **
     *
     **Important** `abc` is a key that is reserved by IoT Platform. You cannot set **tagKey** to abc. If you set `tagKey` to abc, the abc tag is automatically filtered when you query tags.
     *
     * @example [{"tagKey":"h1","tagValue":"rr"},{"tagKey":"7h","tagValue":"rr"}]
     *
     * @var string
     */
    public $tagString;
    protected $_name = [
        'groupId'       => 'GroupId',
        'groupType'     => 'GroupType',
        'iotInstanceId' => 'IotInstanceId',
        'tagString'     => 'TagString',
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
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->tagString) {
            $res['TagString'] = $this->tagString;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDeviceGroupTagsRequest
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
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['TagString'])) {
            $model->tagString = $map['TagString'];
        }

        return $model;
    }
}
