<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserGroupAndDeviceGroupRelationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example ni1iyxqry0j03plv
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
     * @example TestDeviceGroupId
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
     * @example TestUserGroupId
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
     * @return data
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
