<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceAllUserGroupAndDeviceGroupRelationResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example ni1iyxqry0j0****
     *
     * @var string
     */
    public $controlId;

    /**
     * @example SYNC_INFO_PICTURE
     *
     * @var string
     */
    public $controlType;

    /**
     * @example TestDeviceGro****
     *
     * @var string
     */
    public $deviceGroupId;

    /**
     * @example 2020-05-12 17:12:37
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example TestUserGro****
     *
     * @var string
     */
    public $userGroupId;
    protected $_name = [
        'controlId'     => 'ControlId',
        'controlType'   => 'ControlType',
        'deviceGroupId' => 'DeviceGroupId',
        'modifiedTime'  => 'ModifiedTime',
        'userGroupId'   => 'UserGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->controlId) {
            $res['ControlId'] = $this->controlId;
        }
        if (null !== $this->controlType) {
            $res['ControlType'] = $this->controlType;
        }
        if (null !== $this->deviceGroupId) {
            $res['DeviceGroupId'] = $this->deviceGroupId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ControlId'])) {
            $model->controlId = $map['ControlId'];
        }
        if (isset($map['ControlType'])) {
            $model->controlType = $map['ControlType'];
        }
        if (isset($map['DeviceGroupId'])) {
            $model->deviceGroupId = $map['DeviceGroupId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        return $model;
    }
}
