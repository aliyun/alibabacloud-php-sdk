<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateLocalFileUploadJobRequest\timeSlot;
use AlibabaCloud\Tea\Model;

class CreateLocalFileUploadJobRequest extends Model
{
    /**
     * @example iot-cn-n6w1y59****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var timeSlot[]
     */
    public $timeSlot;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'timeSlot'      => 'TimeSlot',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->timeSlot) {
            $res['TimeSlot'] = [];
            if (null !== $this->timeSlot && \is_array($this->timeSlot)) {
                $n = 0;
                foreach ($this->timeSlot as $item) {
                    $res['TimeSlot'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLocalFileUploadJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['TimeSlot'])) {
            if (!empty($map['TimeSlot'])) {
                $model->timeSlot = [];
                $n               = 0;
                foreach ($map['TimeSlot'] as $item) {
                    $model->timeSlot[$n++] = null !== $item ? timeSlot::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
