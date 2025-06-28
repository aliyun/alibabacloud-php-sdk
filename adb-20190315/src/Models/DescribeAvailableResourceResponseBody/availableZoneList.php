<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode;

class availableZoneList extends Model
{
    /**
     * @var string[]
     */
    public $supportedComputeResource;

    /**
     * @var supportedMode[]
     */
    public $supportedMode;

    /**
     * @var string[]
     */
    public $supportedStorageResource;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'supportedComputeResource' => 'SupportedComputeResource',
        'supportedMode' => 'SupportedMode',
        'supportedStorageResource' => 'SupportedStorageResource',
        'zoneId' => 'ZoneId',
        'zoneName' => 'ZoneName',
    ];

    public function validate()
    {
        if (\is_array($this->supportedComputeResource)) {
            Model::validateArray($this->supportedComputeResource);
        }
        if (\is_array($this->supportedMode)) {
            Model::validateArray($this->supportedMode);
        }
        if (\is_array($this->supportedStorageResource)) {
            Model::validateArray($this->supportedStorageResource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedComputeResource) {
            if (\is_array($this->supportedComputeResource)) {
                $res['SupportedComputeResource'] = [];
                $n1 = 0;
                foreach ($this->supportedComputeResource as $item1) {
                    $res['SupportedComputeResource'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->supportedMode) {
            if (\is_array($this->supportedMode)) {
                $res['SupportedMode'] = [];
                $n1 = 0;
                foreach ($this->supportedMode as $item1) {
                    $res['SupportedMode'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->supportedStorageResource) {
            if (\is_array($this->supportedStorageResource)) {
                $res['SupportedStorageResource'] = [];
                $n1 = 0;
                foreach ($this->supportedStorageResource as $item1) {
                    $res['SupportedStorageResource'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedComputeResource'])) {
            if (!empty($map['SupportedComputeResource'])) {
                $model->supportedComputeResource = [];
                $n1 = 0;
                foreach ($map['SupportedComputeResource'] as $item1) {
                    $model->supportedComputeResource[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SupportedMode'])) {
            if (!empty($map['SupportedMode'])) {
                $model->supportedMode = [];
                $n1 = 0;
                foreach ($map['SupportedMode'] as $item1) {
                    $model->supportedMode[$n1] = supportedMode::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SupportedStorageResource'])) {
            if (!empty($map['SupportedStorageResource'])) {
                $model->supportedStorageResource = [];
                $n1 = 0;
                foreach ($map['SupportedStorageResource'] as $item1) {
                    $model->supportedStorageResource[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
