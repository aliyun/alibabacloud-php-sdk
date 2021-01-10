<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class DescribeDeviceShadowRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $deviceModel;

    /**
     * @var string
     */
    public $path;

    /**
     * @var bool
     */
    public $viewSubscribed;
    protected $_name = [
        'projectId'      => 'ProjectId',
        'deviceId'       => 'DeviceId',
        'deviceModel'    => 'DeviceModel',
        'path'           => 'Path',
        'viewSubscribed' => 'ViewSubscribed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = $this->deviceModel;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->viewSubscribed) {
            $res['ViewSubscribed'] = $this->viewSubscribed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDeviceShadowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceModel'])) {
            $model->deviceModel = $map['DeviceModel'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['ViewSubscribed'])) {
            $model->viewSubscribed = $map['ViewSubscribed'];
        }

        return $model;
    }
}
