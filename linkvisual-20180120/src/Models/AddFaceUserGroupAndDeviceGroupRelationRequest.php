<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class AddFaceUserGroupAndDeviceGroupRelationRequest extends Model
{
    /**
     * @example kvjyhurc
     *
     * @var string
     */
    public $deviceGroupId;

    /**
     * @example TestInstanceId
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example TestIsolationId
     *
     * @var string
     */
    public $isolationId;

    /**
     * @example SYNC_INFO_PICTURE
     *
     * @var string
     */
    public $relation;

    /**
     * @example avjyxurd
     *
     * @var string
     */
    public $userGroupId;
    protected $_name = [
        'deviceGroupId' => 'DeviceGroupId',
        'iotInstanceId' => 'IotInstanceId',
        'isolationId'   => 'IsolationId',
        'relation'      => 'Relation',
        'userGroupId'   => 'UserGroupId',
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
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->isolationId) {
            $res['IsolationId'] = $this->isolationId;
        }
        if (null !== $this->relation) {
            $res['Relation'] = $this->relation;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddFaceUserGroupAndDeviceGroupRelationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceGroupId'])) {
            $model->deviceGroupId = $map['DeviceGroupId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['IsolationId'])) {
            $model->isolationId = $map['IsolationId'];
        }
        if (isset($map['Relation'])) {
            $model->relation = $map['Relation'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        return $model;
    }
}
