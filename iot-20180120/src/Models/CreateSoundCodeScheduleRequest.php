<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateSoundCodeScheduleRequest extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example 2022-03-31
     *
     * @var string
     */
    public $endDate;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example INNER
     *
     * @var string
     */
    public $openType;

    /**
     * @example 2022-03-31
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'description'   => 'Description',
        'endDate'       => 'EndDate',
        'iotInstanceId' => 'IotInstanceId',
        'name'          => 'Name',
        'openType'      => 'OpenType',
        'startDate'     => 'StartDate',
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
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->openType) {
            $res['OpenType'] = $this->openType;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSoundCodeScheduleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OpenType'])) {
            $model->openType = $map['OpenType'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
