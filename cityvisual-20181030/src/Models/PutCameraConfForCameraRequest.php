<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\Tea\Model;

class PutCameraConfForCameraRequest extends Model
{
    /**
     * @var string
     */
    public $cameraId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $cameraName;

    /**
     * @var string
     */
    public $context;
    protected $_name = [
        'cameraId'   => 'CameraId',
        'instanceId' => 'InstanceId',
        'regionId'   => 'RegionId',
        'cameraName' => 'CameraName',
        'context'    => 'Context',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cameraId) {
            $res['CameraId'] = $this->cameraId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->cameraName) {
            $res['CameraName'] = $this->cameraName;
        }
        if (null !== $this->context) {
            $res['Context'] = $this->context;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutCameraConfForCameraRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CameraId'])) {
            $model->cameraId = $map['CameraId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['CameraName'])) {
            $model->cameraName = $map['CameraName'];
        }
        if (isset($map['Context'])) {
            $model->context = $map['Context'];
        }

        return $model;
    }
}
