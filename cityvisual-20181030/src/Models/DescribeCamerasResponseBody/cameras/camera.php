<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeCamerasResponseBody\cameras;

use AlibabaCloud\Tea\Model;

class camera extends Model
{
    /**
     * @var string
     */
    public $streamStatus;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $cameraId;

    /**
     * @var string
     */
    public $conf;

    /**
     * @var string
     */
    public $rtmpPath;

    /**
     * @var string
     */
    public $inviteUri;

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
    public $location;
    protected $_name = [
        'streamStatus' => 'StreamStatus',
        'updateTime'   => 'UpdateTime',
        'cameraId'     => 'CameraId',
        'conf'         => 'Conf',
        'rtmpPath'     => 'RtmpPath',
        'inviteUri'    => 'InviteUri',
        'cameraName'   => 'CameraName',
        'workGroupId'  => 'WorkGroupId',
        'location'     => 'Location',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->streamStatus) {
            $res['StreamStatus'] = $this->streamStatus;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->cameraId) {
            $res['CameraId'] = $this->cameraId;
        }
        if (null !== $this->conf) {
            $res['Conf'] = $this->conf;
        }
        if (null !== $this->rtmpPath) {
            $res['RtmpPath'] = $this->rtmpPath;
        }
        if (null !== $this->inviteUri) {
            $res['InviteUri'] = $this->inviteUri;
        }
        if (null !== $this->cameraName) {
            $res['CameraName'] = $this->cameraName;
        }
        if (null !== $this->workGroupId) {
            $res['WorkGroupId'] = $this->workGroupId;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return camera
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StreamStatus'])) {
            $model->streamStatus = $map['StreamStatus'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['CameraId'])) {
            $model->cameraId = $map['CameraId'];
        }
        if (isset($map['Conf'])) {
            $model->conf = $map['Conf'];
        }
        if (isset($map['RtmpPath'])) {
            $model->rtmpPath = $map['RtmpPath'];
        }
        if (isset($map['InviteUri'])) {
            $model->inviteUri = $map['InviteUri'];
        }
        if (isset($map['CameraName'])) {
            $model->cameraName = $map['CameraName'];
        }
        if (isset($map['WorkGroupId'])) {
            $model->workGroupId = $map['WorkGroupId'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        return $model;
    }
}
