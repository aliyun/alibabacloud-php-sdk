<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $deviceActive;

    /**
     * @example 10
     *
     * @var int
     */
    public $deviceCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $deviceOnline;

    /**
     * @example product_key = "a1***" and name LIKE "test%"
     *
     * @var string
     */
    public $dynamicGroupExpression;

    /**
     * @example usefulGroup
     *
     * @var string
     */
    public $groupDesc;

    /**
     * @example tDQvBJqbUyHs****
     *
     * @var string
     */
    public $groupId;

    /**
     * @example aliyun
     *
     * @var string
     */
    public $groupName;

    /**
     * @example 2018-09-14T14:35:51.000Z
     *
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
