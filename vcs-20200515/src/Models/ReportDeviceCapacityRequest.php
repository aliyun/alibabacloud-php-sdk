<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\SDK\Vcs\V20200515\Models\ReportDeviceCapacityRequest\streamCapacities;
use AlibabaCloud\Tea\Model;

class ReportDeviceCapacityRequest extends Model
{
    /**
     * @var string
     */
    public $longitude;

    /**
     * @var string
     */
    public $latitude;

    /**
     * @var string
     */
    public $audioFormat;

    /**
     * @var string
     */
    public $presetNum;

    /**
     * @var string
     */
    public $PTZCapacity;

    /**
     * @var string
     */
    public $deviceSn;

    /**
     * @var streamCapacities[]
     */
    public $streamCapacities;

    /**
     * @var string
     */
    public $deviceTimeStamp;
    protected $_name = [
        'longitude'        => 'Longitude',
        'latitude'         => 'Latitude',
        'audioFormat'      => 'AudioFormat',
        'presetNum'        => 'PresetNum',
        'PTZCapacity'      => 'PTZCapacity',
        'deviceSn'         => 'DeviceSn',
        'streamCapacities' => 'StreamCapacities',
        'deviceTimeStamp'  => 'DeviceTimeStamp',
    ];

    public function validate()
    {
        Model::validateRequired('deviceSn', $this->deviceSn, true);
        Model::validateRequired('streamCapacities', $this->streamCapacities, true);
        Model::validateRequired('deviceTimeStamp', $this->deviceTimeStamp, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->audioFormat) {
            $res['AudioFormat'] = $this->audioFormat;
        }
        if (null !== $this->presetNum) {
            $res['PresetNum'] = $this->presetNum;
        }
        if (null !== $this->PTZCapacity) {
            $res['PTZCapacity'] = $this->PTZCapacity;
        }
        if (null !== $this->deviceSn) {
            $res['DeviceSn'] = $this->deviceSn;
        }
        if (null !== $this->streamCapacities) {
            $res['StreamCapacities'] = [];
            if (null !== $this->streamCapacities && \is_array($this->streamCapacities)) {
                $n = 0;
                foreach ($this->streamCapacities as $item) {
                    $res['StreamCapacities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->deviceTimeStamp) {
            $res['DeviceTimeStamp'] = $this->deviceTimeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReportDeviceCapacityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['AudioFormat'])) {
            $model->audioFormat = $map['AudioFormat'];
        }
        if (isset($map['PresetNum'])) {
            $model->presetNum = $map['PresetNum'];
        }
        if (isset($map['PTZCapacity'])) {
            $model->PTZCapacity = $map['PTZCapacity'];
        }
        if (isset($map['DeviceSn'])) {
            $model->deviceSn = $map['DeviceSn'];
        }
        if (isset($map['StreamCapacities'])) {
            if (!empty($map['StreamCapacities'])) {
                $model->streamCapacities = [];
                $n                       = 0;
                foreach ($map['StreamCapacities'] as $item) {
                    $model->streamCapacities[$n++] = null !== $item ? streamCapacities::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DeviceTimeStamp'])) {
            $model->deviceTimeStamp = $map['DeviceTimeStamp'];
        }

        return $model;
    }
}
