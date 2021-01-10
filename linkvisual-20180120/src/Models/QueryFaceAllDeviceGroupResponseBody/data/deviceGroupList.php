<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceAllDeviceGroupResponseBody\data;

use AlibabaCloud\Tea\Model;

class deviceGroupList extends Model
{
    /**
     * @var string
     */
    public $deviceGroupId;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $deviceGroupName;
    protected $_name = [
        'deviceGroupId'   => 'DeviceGroupId',
        'modifiedTime'    => 'ModifiedTime',
        'deviceGroupName' => 'DeviceGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceGroupId) {
            $res['DeviceGroupId'] = $this->deviceGroupId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->deviceGroupName) {
            $res['DeviceGroupName'] = $this->deviceGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceGroupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceGroupId'])) {
            $model->deviceGroupId = $map['DeviceGroupId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['DeviceGroupName'])) {
            $model->deviceGroupName = $map['DeviceGroupName'];
        }

        return $model;
    }
}
