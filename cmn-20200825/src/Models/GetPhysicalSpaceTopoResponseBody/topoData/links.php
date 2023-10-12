<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetPhysicalSpaceTopoResponseBody\topoData;

use AlibabaCloud\Tea\Model;

class links extends Model
{
    /**
     * @example device-gbutctzxtuu7t122
     *
     * @var string
     */
    public $sourceDeviceId;

    /**
     * @example TEST-xxxx1
     *
     * @var string
     */
    public $sourceDeviceName;

    /**
     * @example GE2/3/0/1
     *
     * @var string
     */
    public $sourcePort;

    /**
     * @example device-i2g2iaiao5ja12345
     *
     * @var string
     */
    public $targetDeviceId;

    /**
     * @example TEST-xxxx2
     *
     * @var string
     */
    public $targetDeviceName;

    /**
     * @example TE1/0/28
     *
     * @var string
     */
    public $targetPort;
    protected $_name = [
        'sourceDeviceId'   => 'SourceDeviceId',
        'sourceDeviceName' => 'SourceDeviceName',
        'sourcePort'       => 'SourcePort',
        'targetDeviceId'   => 'TargetDeviceId',
        'targetDeviceName' => 'TargetDeviceName',
        'targetPort'       => 'TargetPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceDeviceId) {
            $res['SourceDeviceId'] = $this->sourceDeviceId;
        }
        if (null !== $this->sourceDeviceName) {
            $res['SourceDeviceName'] = $this->sourceDeviceName;
        }
        if (null !== $this->sourcePort) {
            $res['SourcePort'] = $this->sourcePort;
        }
        if (null !== $this->targetDeviceId) {
            $res['TargetDeviceId'] = $this->targetDeviceId;
        }
        if (null !== $this->targetDeviceName) {
            $res['TargetDeviceName'] = $this->targetDeviceName;
        }
        if (null !== $this->targetPort) {
            $res['TargetPort'] = $this->targetPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return links
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceDeviceId'])) {
            $model->sourceDeviceId = $map['SourceDeviceId'];
        }
        if (isset($map['SourceDeviceName'])) {
            $model->sourceDeviceName = $map['SourceDeviceName'];
        }
        if (isset($map['SourcePort'])) {
            $model->sourcePort = $map['SourcePort'];
        }
        if (isset($map['TargetDeviceId'])) {
            $model->targetDeviceId = $map['TargetDeviceId'];
        }
        if (isset($map['TargetDeviceName'])) {
            $model->targetDeviceName = $map['TargetDeviceName'];
        }
        if (isset($map['TargetPort'])) {
            $model->targetPort = $map['TargetPort'];
        }

        return $model;
    }
}
