<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserGroupAndDeviceGroupRelationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
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
    public $controlType;

    /**
     * @var string
     */
    public $userGroupId;

    /**
     * @var string
     */
    public $controlId;
    protected $_name = [
        'deviceGroupId' => 'DeviceGroupId',
        'modifiedTime'  => 'ModifiedTime',
        'controlType'   => 'ControlType',
        'userGroupId'   => 'UserGroupId',
        'controlId'     => 'ControlId',
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
        if (null !== $this->controlType) {
            $res['ControlType'] = $this->controlType;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }
        if (null !== $this->controlId) {
            $res['ControlId'] = $this->controlId;
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
        if (isset($map['DeviceGroupId'])) {
            $model->deviceGroupId = $map['DeviceGroupId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ControlType'])) {
            $model->controlType = $map['ControlType'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }
        if (isset($map['ControlId'])) {
            $model->controlId = $map['ControlId'];
        }

        return $model;
    }
}
