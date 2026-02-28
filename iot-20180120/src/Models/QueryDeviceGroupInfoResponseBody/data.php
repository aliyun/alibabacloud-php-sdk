<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupInfoResponseBody;

use AlibabaCloud\Dara\Model;

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
        'deviceActive' => 'DeviceActive',
        'deviceCount' => 'DeviceCount',
        'deviceOnline' => 'DeviceOnline',
        'dynamicGroupExpression' => 'DynamicGroupExpression',
        'groupDesc' => 'GroupDesc',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'utcCreate' => 'UtcCreate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
