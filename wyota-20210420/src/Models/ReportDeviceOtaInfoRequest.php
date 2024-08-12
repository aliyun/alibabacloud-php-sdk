<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class ReportDeviceOtaInfoRequest extends Model
{
    /**
     * @var string
     */
    public $baseVersion;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $note;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $targetVersion;
    protected $_name = [
        'baseVersion'   => 'BaseVersion',
        'deviceId'      => 'DeviceId',
        'model'         => 'Model',
        'note'          => 'Note',
        'status'        => 'Status',
        'targetVersion' => 'TargetVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseVersion) {
            $res['BaseVersion'] = $this->baseVersion;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->targetVersion) {
            $res['TargetVersion'] = $this->targetVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReportDeviceOtaInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseVersion'])) {
            $model->baseVersion = $map['BaseVersion'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TargetVersion'])) {
            $model->targetVersion = $map['TargetVersion'];
        }

        return $model;
    }
}
