<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class ExecuteCameraShootingCommandRequest extends Model
{
    /**
     * @description 项目ID
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 终端设备id
     *
     * @var string
     */
    public $edgeDeviceId;

    /**
     * @description 拍摄类型，0-图片，1-视频
     *
     * @var int
     */
    public $shootingType;

    /**
     * @description 拍摄数量
     *
     * @var int
     */
    public $number;

    /**
     * @description 拍照间隔/视频时长，单位为s
     *
     * @var int
     */
    public $time;
    protected $_name = [
        'projectId'    => 'ProjectId',
        'edgeDeviceId' => 'EdgeDeviceId',
        'shootingType' => 'ShootingType',
        'number'       => 'Number',
        'time'         => 'Time',
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
        if (null !== $this->edgeDeviceId) {
            $res['EdgeDeviceId'] = $this->edgeDeviceId;
        }
        if (null !== $this->shootingType) {
            $res['ShootingType'] = $this->shootingType;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteCameraShootingCommandRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['EdgeDeviceId'])) {
            $model->edgeDeviceId = $map['EdgeDeviceId'];
        }
        if (isset($map['ShootingType'])) {
            $model->shootingType = $map['ShootingType'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
