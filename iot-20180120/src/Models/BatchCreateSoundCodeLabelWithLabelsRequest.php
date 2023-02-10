<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class BatchCreateSoundCodeLabelWithLabelsRequest extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example test
     *
     * @var string[]
     */
    public $labels;

    /**
     * @example Md3ZiTL888K9llXDy7890***********
     *
     * @var string
     */
    public $scheduleCode;
    protected $_name = [
        'description'   => 'Description',
        'iotInstanceId' => 'IotInstanceId',
        'labels'        => 'Labels',
        'scheduleCode'  => 'ScheduleCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->scheduleCode) {
            $res['ScheduleCode'] = $this->scheduleCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchCreateSoundCodeLabelWithLabelsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = $map['Labels'];
            }
        }
        if (isset($map['ScheduleCode'])) {
            $model->scheduleCode = $map['ScheduleCode'];
        }

        return $model;
    }
}
