<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DeleteEdgeDriverRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $driverId;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'driverId'      => 'DriverId',
    ];

    public function validate()
    {
        Model::validateRequired('driverId', $this->driverId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->driverId) {
            $res['DriverId'] = $this->driverId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEdgeDriverRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['DriverId'])) {
            $model->driverId = $map['DriverId'];
        }

        return $model;
    }
}
