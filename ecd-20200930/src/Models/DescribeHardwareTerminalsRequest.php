<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeHardwareTerminalsRequest extends Model
{
    /**
     * @var string
     */
    public $hardwareType;

    /**
     * @var string
     */
    public $hardwareVersion;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'hardwareType'    => 'HardwareType',
        'hardwareVersion' => 'HardwareVersion',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hardwareType) {
            $res['HardwareType'] = $this->hardwareType;
        }
        if (null !== $this->hardwareVersion) {
            $res['HardwareVersion'] = $this->hardwareVersion;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHardwareTerminalsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HardwareType'])) {
            $model->hardwareType = $map['HardwareType'];
        }
        if (isset($map['HardwareVersion'])) {
            $model->hardwareVersion = $map['HardwareVersion'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
