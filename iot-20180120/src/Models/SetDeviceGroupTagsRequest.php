<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class SetDeviceGroupTagsRequest extends Model
{
    /**
     * @example W16X8Tvdosec****
     *
     * @var string
     */
    public $groupId;

    /**
     * @example LINK_PLATFORM_DYNAMIC
     *
     * @var string
     */
    public $groupType;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
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
