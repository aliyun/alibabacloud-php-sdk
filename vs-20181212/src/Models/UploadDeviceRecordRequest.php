<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class UploadDeviceRecordRequest extends Model
{
    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $searchCriteria;

    /**
     * @var string
     */
    public $streamId;

    /**
     * @var string
     */
    public $uploadId;

    /**
     * @var string
     */
    public $uploadMode;

    /**
     * @var string
     */
    public $uploadParams;

    /**
     * @var string
     */
    public $uploadType;
    protected $_name = [
        'deviceId'       => 'DeviceId',
        'ownerId'        => 'OwnerId',
        'searchCriteria' => 'SearchCriteria',
        'streamId'       => 'StreamId',
        'uploadId'       => 'UploadId',
        'uploadMode'     => 'UploadMode',
        'uploadParams'   => 'UploadParams',
        'uploadType'     => 'UploadType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->searchCriteria) {
            $res['SearchCriteria'] = $this->searchCriteria;
        }
        if (null !== $this->streamId) {
            $res['StreamId'] = $this->streamId;
        }
        if (null !== $this->uploadId) {
            $res['UploadId'] = $this->uploadId;
        }
        if (null !== $this->uploadMode) {
            $res['UploadMode'] = $this->uploadMode;
        }
        if (null !== $this->uploadParams) {
            $res['UploadParams'] = $this->uploadParams;
        }
        if (null !== $this->uploadType) {
            $res['UploadType'] = $this->uploadType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadDeviceRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SearchCriteria'])) {
            $model->searchCriteria = $map['SearchCriteria'];
        }
        if (isset($map['StreamId'])) {
            $model->streamId = $map['StreamId'];
        }
        if (isset($map['UploadId'])) {
            $model->uploadId = $map['UploadId'];
        }
        if (isset($map['UploadMode'])) {
            $model->uploadMode = $map['UploadMode'];
        }
        if (isset($map['UploadParams'])) {
            $model->uploadParams = $map['UploadParams'];
        }
        if (isset($map['UploadType'])) {
            $model->uploadType = $map['UploadType'];
        }

        return $model;
    }
}
