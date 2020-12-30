<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\Tea\Model;

class ListStreamsForCamerasRequest extends Model
{
    /**
     * @var string
     */
    public $cameraIds;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'cameraIds'  => 'CameraIds',
        'regionId'   => 'RegionId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cameraIds) {
            $res['CameraIds'] = $this->cameraIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStreamsForCamerasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CameraIds'])) {
            $model->cameraIds = $map['CameraIds'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
