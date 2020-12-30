<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\Tea\Model;

class CreateCameraRequest extends Model
{
    /**
     * @var string
     */
    public $cameraName;

    /**
     * @var string
     */
    public $workGroupId;

    /**
     * @var string
     */
    public $cameraId;

    /**
     * @var string
     */
    public $locationInfo;

    /**
     * @var string
     */
    public $inviteUri;

    /**
     * @var string
     */
    public $ossPath;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cameraName'   => 'CameraName',
        'workGroupId'  => 'WorkGroupId',
        'cameraId'     => 'CameraId',
        'locationInfo' => 'LocationInfo',
        'inviteUri'    => 'InviteUri',
        'ossPath'      => 'OssPath',
        'instanceId'   => 'InstanceId',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cameraName) {
            $res['CameraName'] = $this->cameraName;
        }
        if (null !== $this->workGroupId) {
            $res['WorkGroupId'] = $this->workGroupId;
        }
        if (null !== $this->cameraId) {
            $res['CameraId'] = $this->cameraId;
        }
        if (null !== $this->locationInfo) {
            $res['LocationInfo'] = $this->locationInfo;
        }
        if (null !== $this->inviteUri) {
            $res['InviteUri'] = $this->inviteUri;
        }
        if (null !== $this->ossPath) {
            $res['OssPath'] = $this->ossPath;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCameraRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CameraName'])) {
            $model->cameraName = $map['CameraName'];
        }
        if (isset($map['WorkGroupId'])) {
            $model->workGroupId = $map['WorkGroupId'];
        }
        if (isset($map['CameraId'])) {
            $model->cameraId = $map['CameraId'];
        }
        if (isset($map['LocationInfo'])) {
            $model->locationInfo = $map['LocationInfo'];
        }
        if (isset($map['InviteUri'])) {
            $model->inviteUri = $map['InviteUri'];
        }
        if (isset($map['OssPath'])) {
            $model->ossPath = $map['OssPath'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
