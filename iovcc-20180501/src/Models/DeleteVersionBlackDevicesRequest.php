<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class DeleteVersionBlackDevicesRequest extends Model
{
    /**
     * @var string
     */
    public $deviceIds;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $versionType;

    /**
     * @var string
     */
    public $versionId;

    /**
     * @var string
     */
    public $deviceIdType;
    protected $_name = [
        'deviceIds'    => 'DeviceIds',
        'projectId'    => 'ProjectId',
        'versionType'  => 'VersionType',
        'versionId'    => 'VersionId',
        'deviceIdType' => 'DeviceIdType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceIds) {
            $res['DeviceIds'] = $this->deviceIds;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->versionType) {
            $res['VersionType'] = $this->versionType;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->deviceIdType) {
            $res['DeviceIdType'] = $this->deviceIdType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteVersionBlackDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceIds'])) {
            $model->deviceIds = $map['DeviceIds'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['VersionType'])) {
            $model->versionType = $map['VersionType'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['DeviceIdType'])) {
            $model->deviceIdType = $map['DeviceIdType'];
        }

        return $model;
    }
}
