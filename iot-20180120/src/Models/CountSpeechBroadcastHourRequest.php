<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CountSpeechBroadcastHourRequest extends Model
{
    /**
     * @example iot-2w****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example 2020090919
     *
     * @var string
     */
    public $queryDateTimeHour;

    /**
     * @example ebed9280_ba25_48df_80c2_****
     *
     * @var string
     */
    public $shareTaskCode;
    protected $_name = [
        'iotInstanceId'     => 'IotInstanceId',
        'queryDateTimeHour' => 'QueryDateTimeHour',
        'shareTaskCode'     => 'ShareTaskCode',
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
        if (null !== $this->queryDateTimeHour) {
            $res['QueryDateTimeHour'] = $this->queryDateTimeHour;
        }
        if (null !== $this->shareTaskCode) {
            $res['ShareTaskCode'] = $this->shareTaskCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CountSpeechBroadcastHourRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['QueryDateTimeHour'])) {
            $model->queryDateTimeHour = $map['QueryDateTimeHour'];
        }
        if (isset($map['ShareTaskCode'])) {
            $model->shareTaskCode = $map['ShareTaskCode'];
        }

        return $model;
    }
}
