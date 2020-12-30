<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\Tea\Model;

class DescribeCamerasRequest extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $cameraId;

    /**
     * @var string
     */
    public $cameraName;

    /**
     * @var string
     */
    public $streamStatus;

    /**
     * @var string
     */
    public $workGroupId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'cameraId'     => 'CameraId',
        'cameraName'   => 'CameraName',
        'streamStatus' => 'StreamStatus',
        'workGroupId'  => 'WorkGroupId',
        'instanceId'   => 'InstanceId',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->cameraId) {
            $res['CameraId'] = $this->cameraId;
        }
        if (null !== $this->cameraName) {
            $res['CameraName'] = $this->cameraName;
        }
        if (null !== $this->streamStatus) {
            $res['StreamStatus'] = $this->streamStatus;
        }
        if (null !== $this->workGroupId) {
            $res['WorkGroupId'] = $this->workGroupId;
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
     * @return DescribeCamerasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CameraId'])) {
            $model->cameraId = $map['CameraId'];
        }
        if (isset($map['CameraName'])) {
            $model->cameraName = $map['CameraName'];
        }
        if (isset($map['StreamStatus'])) {
            $model->streamStatus = $map['StreamStatus'];
        }
        if (isset($map['WorkGroupId'])) {
            $model->workGroupId = $map['WorkGroupId'];
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
