<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\Tea\Model;

class ModifyCameraRequest extends Model
{
    /**
     * @var string
     */
    public $cameraName;

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
    public $regionId;

    /**
     * @var string
     */
    public $streamStatus;
    protected $_name = [
        'cameraName'   => 'CameraName',
        'cameraId'     => 'CameraId',
        'locationInfo' => 'LocationInfo',
        'inviteUri'    => 'InviteUri',
        'regionId'     => 'RegionId',
        'streamStatus' => 'StreamStatus',
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
        if (null !== $this->cameraId) {
            $res['CameraId'] = $this->cameraId;
        }
        if (null !== $this->locationInfo) {
            $res['LocationInfo'] = $this->locationInfo;
        }
        if (null !== $this->inviteUri) {
            $res['InviteUri'] = $this->inviteUri;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->streamStatus) {
            $res['StreamStatus'] = $this->streamStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCameraRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CameraName'])) {
            $model->cameraName = $map['CameraName'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StreamStatus'])) {
            $model->streamStatus = $map['StreamStatus'];
        }

        return $model;
    }
}
