<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode;
use AlibabaCloud\Tea\Model;

class availableZoneList extends Model
{
    /**
     * @description A reserved parameter.
     *
     * @var string[]
     */
    public $supportedComputeResource;

    /**
     * @description The supported modes.
     *
     * @var supportedMode[]
     */
    public $supportedMode;

    /**
     * @description A reserved parameter.
     *
     * @var string[]
     */
    public $supportedStorageResource;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'supportedComputeResource' => 'SupportedComputeResource',
        'supportedMode'            => 'SupportedMode',
        'supportedStorageResource' => 'SupportedStorageResource',
        'zoneId'                   => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedComputeResource) {
            $res['SupportedComputeResource'] = $this->supportedComputeResource;
        }
        if (null !== $this->supportedMode) {
            $res['SupportedMode'] = [];
            if (null !== $this->supportedMode && \is_array($this->supportedMode)) {
                $n = 0;
                foreach ($this->supportedMode as $item) {
                    $res['SupportedMode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->supportedStorageResource) {
            $res['SupportedStorageResource'] = $this->supportedStorageResource;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableZoneList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedComputeResource'])) {
            if (!empty($map['SupportedComputeResource'])) {
                $model->supportedComputeResource = $map['SupportedComputeResource'];
            }
        }
        if (isset($map['SupportedMode'])) {
            if (!empty($map['SupportedMode'])) {
                $model->supportedMode = [];
                $n                    = 0;
                foreach ($map['SupportedMode'] as $item) {
                    $model->supportedMode[$n++] = null !== $item ? supportedMode::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SupportedStorageResource'])) {
            if (!empty($map['SupportedStorageResource'])) {
                $model->supportedStorageResource = $map['SupportedStorageResource'];
            }
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
