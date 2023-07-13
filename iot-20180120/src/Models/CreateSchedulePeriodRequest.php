<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateSchedulePeriodRequest extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example 01:00
     *
     * @var string
     */
    public $endTime;

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
    public $scheduleCode;

    /**
     * @example www.taobao.com
     *
     * @var string
     */
    public $soundCodeContent;

    /**
     * @example 00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'description'      => 'Description',
        'endTime'          => 'EndTime',
        'iotInstanceId'    => 'IotInstanceId',
        'scheduleCode'     => 'ScheduleCode',
        'soundCodeContent' => 'SoundCodeContent',
        'startTime'        => 'StartTime',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->scheduleCode) {
            $res['ScheduleCode'] = $this->scheduleCode;
        }
        if (null !== $this->soundCodeContent) {
            $res['SoundCodeContent'] = $this->soundCodeContent;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSchedulePeriodRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ScheduleCode'])) {
            $model->scheduleCode = $map['ScheduleCode'];
        }
        if (isset($map['SoundCodeContent'])) {
            $model->soundCodeContent = $map['SoundCodeContent'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
