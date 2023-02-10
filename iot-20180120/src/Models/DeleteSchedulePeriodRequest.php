<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DeleteSchedulePeriodRequest extends Model
{
    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example Md3ZiTL888K9llXDy7890***********
     *
     * @var string
     */
    public $periodCode;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'periodCode'    => 'PeriodCode',
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
        if (null !== $this->periodCode) {
            $res['PeriodCode'] = $this->periodCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSchedulePeriodRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['PeriodCode'])) {
            $model->periodCode = $map['PeriodCode'];
        }

        return $model;
    }
}
