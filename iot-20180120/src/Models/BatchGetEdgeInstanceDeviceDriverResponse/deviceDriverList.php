<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDeviceDriverResponse;

use AlibabaCloud\Tea\Model;

class deviceDriverList extends Model
{
    /**
     * @var string
     */
    public $driverId;

    /**
     * @var string
     */
    public $iotId;
    protected $_name = [
        'driverId' => 'DriverId',
        'iotId'    => 'IotId',
    ];

    public function validate()
    {
        Model::validateRequired('driverId', $this->driverId, true);
        Model::validateRequired('iotId', $this->iotId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->driverId) {
            $res['DriverId'] = $this->driverId;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceDriverList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DriverId'])) {
            $model->driverId = $map['DriverId'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }

        return $model;
    }
}
