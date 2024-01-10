<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DeletePowerStationRequest extends Model
{
    /**
     * @var string
     */
    public $algorithmInstanceUid;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $powerStationUid;
    protected $_name = [
        'algorithmInstanceUid' => 'AlgorithmInstanceUid',
        'iotInstanceId'        => 'IotInstanceId',
        'powerStationUid'      => 'PowerStationUid',
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
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->powerStationUid) {
            $res['PowerStationUid'] = $this->powerStationUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePowerStationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmInstanceUid'])) {
            $model->algorithmInstanceUid = $map['AlgorithmInstanceUid'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['PowerStationUid'])) {
            $model->powerStationUid = $map['PowerStationUid'];
        }

        return $model;
    }
}
