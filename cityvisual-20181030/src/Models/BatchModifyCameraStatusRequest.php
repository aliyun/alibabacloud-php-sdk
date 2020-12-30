<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\Tea\Model;

class BatchModifyCameraStatusRequest extends Model
{
    /**
     * @var string
     */
    public $streamStatus;

    /**
     * @var string
     */
    public $cameraIds;

    /**
     * @var string
     */
    public $workGroupId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'streamStatus' => 'StreamStatus',
        'cameraIds'    => 'CameraIds',
        'workGroupId'  => 'WorkGroupId',
        'regionId'     => 'RegionId',
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
        if (null !== $this->cameraIds) {
            $res['CameraIds'] = $this->cameraIds;
        }
        if (null !== $this->workGroupId) {
            $res['WorkGroupId'] = $this->workGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchModifyCameraStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StreamStatus'])) {
            $model->streamStatus = $map['StreamStatus'];
        }
        if (isset($map['CameraIds'])) {
            $model->cameraIds = $map['CameraIds'];
        }
        if (isset($map['WorkGroupId'])) {
            $model->workGroupId = $map['WorkGroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
