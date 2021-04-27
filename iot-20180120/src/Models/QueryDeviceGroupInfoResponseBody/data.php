<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $utcCreate;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $groupDesc;

    /**
     * @var int
     */
    public $deviceCount;

    /**
     * @var int
     */
    public $deviceActive;

    /**
     * @var int
     */
    public $deviceOnline;
    protected $_name = [
        'groupId'      => 'GroupId',
        'utcCreate'    => 'UtcCreate',
        'groupName'    => 'GroupName',
        'groupDesc'    => 'GroupDesc',
        'deviceCount'  => 'DeviceCount',
        'deviceActive' => 'DeviceActive',
        'deviceOnline' => 'DeviceOnline',
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
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupDesc) {
            $res['GroupDesc'] = $this->groupDesc;
        }
        if (null !== $this->deviceCount) {
            $res['DeviceCount'] = $this->deviceCount;
        }
        if (null !== $this->deviceActive) {
            $res['DeviceActive'] = $this->deviceActive;
        }
        if (null !== $this->deviceOnline) {
            $res['DeviceOnline'] = $this->deviceOnline;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupDesc'])) {
            $model->groupDesc = $map['GroupDesc'];
        }
        if (isset($map['DeviceCount'])) {
            $model->deviceCount = $map['DeviceCount'];
        }
        if (isset($map['DeviceActive'])) {
            $model->deviceActive = $map['DeviceActive'];
        }
        if (isset($map['DeviceOnline'])) {
            $model->deviceOnline = $map['DeviceOnline'];
        }

        return $model;
    }
}
