<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class DownloadDeviceResourceShrinkRequest extends Model
{
    /**
     * @example deviceResourceId
     *
     * @var string
     */
    public $deviceResourceId;

    /**
     * @var string
     */
    public $deviceResourceIdsShrink;

    /**
     * @example CONNECTION
     *
     * @var string
     */
    public $downloadType;

    /**
     * @example instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example zzz
     *
     * @var string
     */
    public $setupProjectId;
    protected $_name = [
        'deviceResourceId'        => 'DeviceResourceId',
        'deviceResourceIdsShrink' => 'DeviceResourceIds',
        'downloadType'            => 'DownloadType',
        'instanceId'              => 'InstanceId',
        'setupProjectId'          => 'SetupProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceResourceId) {
            $res['DeviceResourceId'] = $this->deviceResourceId;
        }
        if (null !== $this->deviceResourceIdsShrink) {
            $res['DeviceResourceIds'] = $this->deviceResourceIdsShrink;
        }
        if (null !== $this->downloadType) {
            $res['DownloadType'] = $this->downloadType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->setupProjectId) {
            $res['SetupProjectId'] = $this->setupProjectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DownloadDeviceResourceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceResourceId'])) {
            $model->deviceResourceId = $map['DeviceResourceId'];
        }
        if (isset($map['DeviceResourceIds'])) {
            $model->deviceResourceIdsShrink = $map['DeviceResourceIds'];
        }
        if (isset($map['DownloadType'])) {
            $model->downloadType = $map['DownloadType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SetupProjectId'])) {
            $model->setupProjectId = $map['SetupProjectId'];
        }

        return $model;
    }
}
