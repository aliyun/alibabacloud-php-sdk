<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class AddPowerStationRequest extends Model
{
    /**
     * @var string
     */
    public $algorithmInstanceUid;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $powerStationName;

    /**
     * @var int
     */
    public $ratedPower;
    protected $_name = [
        'algorithmInstanceUid' => 'AlgorithmInstanceUid',
        'description'          => 'Description',
        'iotInstanceId'        => 'IotInstanceId',
        'powerStationName'     => 'PowerStationName',
        'ratedPower'           => 'RatedPower',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmInstanceUid) {
            $res['AlgorithmInstanceUid'] = $this->algorithmInstanceUid;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->powerStationName) {
            $res['PowerStationName'] = $this->powerStationName;
        }
        if (null !== $this->ratedPower) {
            $res['RatedPower'] = $this->ratedPower;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddPowerStationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmInstanceUid'])) {
            $model->algorithmInstanceUid = $map['AlgorithmInstanceUid'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['PowerStationName'])) {
            $model->powerStationName = $map['PowerStationName'];
        }
        if (isset($map['RatedPower'])) {
            $model->ratedPower = $map['RatedPower'];
        }

        return $model;
    }
}
