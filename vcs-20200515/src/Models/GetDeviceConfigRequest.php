<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class GetDeviceConfigRequest extends Model
{
    /**
     * @var string
     */
    public $deviceSn;

    /**
     * @var string
     */
    public $deviceTimeStamp;
    protected $_name = [
        'deviceSn'        => 'DeviceSn',
        'deviceTimeStamp' => 'DeviceTimeStamp',
    ];

    public function validate()
    {
        Model::validateRequired('deviceSn', $this->deviceSn, true);
        Model::validateRequired('deviceTimeStamp', $this->deviceTimeStamp, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceSn) {
            $res['DeviceSn'] = $this->deviceSn;
        }
        if (null !== $this->deviceTimeStamp) {
            $res['DeviceTimeStamp'] = $this->deviceTimeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeviceConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceSn'])) {
            $model->deviceSn = $map['DeviceSn'];
        }
        if (isset($map['DeviceTimeStamp'])) {
            $model->deviceTimeStamp = $map['DeviceTimeStamp'];
        }

        return $model;
    }
}
