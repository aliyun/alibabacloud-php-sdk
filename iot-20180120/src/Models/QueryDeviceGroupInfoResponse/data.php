<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupInfoResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $deviceActive;

    /**
     * @var int
     */
    public $deviceCount;

    /**
     * @var int
     */
    public $deviceOnline;

    /**
     * @var string
     */
    public $dynamicGroupExpression;

    /**
     * @var string
     */
    public $groupDesc;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $utcCreate;
    protected $_name = [
        'deviceActive'           => 'DeviceActive',
        'deviceCount'            => 'DeviceCount',
        'deviceOnline'           => 'DeviceOnline',
        'dynamicGroupExpression' => 'DynamicGroupExpression',
        'groupDesc'              => 'GroupDesc',
        'groupId'                => 'GroupId',
        'groupName'              => 'GroupName',
        'utcCreate'              => 'UtcCreate',
    ];

    public function validate()
    {
        Model::validateRequired('deviceActive', $this->deviceActive, true);
        Model::validateRequired('deviceCount', $this->deviceCount, true);
        Model::validateRequired('deviceOnline', $this->deviceOnline, true);
        Model::validateRequired('dynamicGroupExpression', $this->dynamicGroupExpression, true);
        Model::validateRequired('groupDesc', $this->groupDesc, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('utcCreate', $this->utcCreate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceActive) {
            $res['DeviceActive'] = $this->deviceActive;
        }
        if (null !== $this->deviceCount) {
            $res['DeviceCount'] = $this->deviceCount;
        }
        if (null !== $this->deviceOnline) {
            $res['DeviceOnline'] = $this->deviceOnline;
        }
        if (null !== $this->dynamicGroupExpression) {
            $res['DynamicGroupExpression'] = $this->dynamicGroupExpression;
        }
        if (null !== $this->groupDesc) {
            $res['GroupDesc'] = $this->groupDesc;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
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
        if (isset($map['DeviceActive'])) {
            $model->deviceActive = $map['DeviceActive'];
        }
        if (isset($map['DeviceCount'])) {
            $model->deviceCount = $map['DeviceCount'];
        }
        if (isset($map['DeviceOnline'])) {
            $model->deviceOnline = $map['DeviceOnline'];
        }
        if (isset($map['DynamicGroupExpression'])) {
            $model->dynamicGroupExpression = $map['DynamicGroupExpression'];
        }
        if (isset($map['GroupDesc'])) {
            $model->groupDesc = $map['GroupDesc'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }

        return $model;
    }
}
