<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateDeviceGroupRequest extends Model
{
    /**
     * @var string
     */
    public $groupDesc;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
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
