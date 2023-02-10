<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class TransformClientIdRequest extends Model
{
    /**
     * @example 9rSz********UNMWj33f000112
     *
     * @var string
     */
    public $clientId;

    /**
     * @example BXPV9Ks3bxwM9fD****0000101
     *
     * @var string
     */
    public $iotId;

    /**
     * @example iot-02****43
     *
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'clientId'      => 'ClientId',
        'iotId'         => 'IotId',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TransformClientIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
