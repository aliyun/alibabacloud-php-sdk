<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryDeviceTunnelRequest extends Model
{
    /**
     * @example iot-***-v6***
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example d4098041-a560-***
     *
     * @var string
     */
    public $tunnelId;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'tunnelId'      => 'TunnelId',
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
        if (null !== $this->tunnelId) {
            $res['TunnelId'] = $this->tunnelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDeviceTunnelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['TunnelId'])) {
            $model->tunnelId = $map['TunnelId'];
        }

        return $model;
    }
}
