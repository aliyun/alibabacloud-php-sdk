<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class DeleteCameraShootingRecordRequest extends Model
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
     * @description 拍摄记录ID
     *
     * @var int
     */
    public $shootingRecordId;
    protected $_name = [
        'projectId'        => 'ProjectId',
        'edgeDeviceId'     => 'EdgeDeviceId',
        'shootingRecordId' => 'ShootingRecordId',
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
        if (null !== $this->shootingRecordId) {
            $res['ShootingRecordId'] = $this->shootingRecordId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCameraShootingRecordRequest
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
        if (isset($map['ShootingRecordId'])) {
            $model->shootingRecordId = $map['ShootingRecordId'];
        }

        return $model;
    }
}
