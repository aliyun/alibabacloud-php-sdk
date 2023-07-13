<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class AttachDestinationRequest extends Model
{
    /**
     * @example 1002
     *
     * @var int
     */
    public $destinationId;

    /**
     * @example iot-2w****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example false
     *
     * @var bool
     */
    public $isFailover;

    /**
     * @example 1000
     *
     * @var int
     */
    public $parserId;
    protected $_name = [
        'destinationId' => 'DestinationId',
        'iotInstanceId' => 'IotInstanceId',
        'isFailover'    => 'IsFailover',
        'parserId'      => 'ParserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationId) {
            $res['DestinationId'] = $this->destinationId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->isFailover) {
            $res['IsFailover'] = $this->isFailover;
        }
        if (null !== $this->parserId) {
            $res['ParserId'] = $this->parserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachDestinationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationId'])) {
            $model->destinationId = $map['DestinationId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['IsFailover'])) {
            $model->isFailover = $map['IsFailover'];
        }
        if (isset($map['ParserId'])) {
            $model->parserId = $map['ParserId'];
        }

        return $model;
    }
}
