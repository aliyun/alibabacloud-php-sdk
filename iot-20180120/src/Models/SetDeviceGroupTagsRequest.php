<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class SetDeviceGroupTagsRequest extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
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
        Model::validateRequired('groupId', $this->groupId, true);
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
