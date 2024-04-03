<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\PushDeviceDataRequest;

use AlibabaCloud\Tea\Model;

class devices extends Model
{
    /**
     * @description Measuring point information To avoid accuracy problems, the measurement point data is uniformly transmitted to the string. The function of missing required fields cannot be used normally. Some functions may be affected due to the lack of recommend fields. For details, please refer to the notes of equipment measuring points in the appendix. [Reference Point Definition](https://carbon-doc.oss-cn-hangzhou.aliyuncs.com/Deviceappendixes-en.pdf
     * )
     * @example {
     * }
     * @var mixed[]
     */
    public $data;

    /**
     * @description If the deviceType parameter is set to 12, 13, or 17, you must set the system_id parameter. The field name is still device_id. If the deviceType parameter is set to 15 or 16, no Other situations will be transmitted.
     *
     * @example device_code_xxx
     *
     * @var string
     */
    public $deviceId;

    /**
     * @description Data generation time of measuring point.
     *
     * @example 2021-09-08 18:40:00
     *
     * @var string
     */
    public $recordTime;
    protected $_name = [
        'data'       => 'data',
        'deviceId'   => 'deviceId',
        'recordTime' => 'recordTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->deviceId) {
            $res['deviceId'] = $this->deviceId;
        }
        if (null !== $this->recordTime) {
            $res['recordTime'] = $this->recordTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return devices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }
        if (isset($map['deviceId'])) {
            $model->deviceId = $map['deviceId'];
        }
        if (isset($map['recordTime'])) {
            $model->recordTime = $map['recordTime'];
        }

        return $model;
    }
}
