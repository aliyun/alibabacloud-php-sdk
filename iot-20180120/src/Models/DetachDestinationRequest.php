<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DetachDestinationRequest extends Model
{
    /**
     * @description The ID of the data destination. You can call the [ListDestination](~~433025~~) operation to query data destinations and obtain the ID of the **data destination**.
     *
     * @example 1002
     *
     * @var int
     */
    public $destinationId;

    /**
     * @description The ID of the instance. You can view the **ID** of the instance on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must specify the ID for this parameter. Otherwise, the call fails.
     * >*   If no **Overview** page or ID is generated for your instance, you do not need to configure this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot-2w****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The ID of the parser. You can call the [ListParser](~~444814~~) operation to query parsers and obtain the ID of the **parser**.
     *
     * @example 1000
     *
     * @var int
     */
    public $parserId;
    protected $_name = [
        'destinationId' => 'DestinationId',
        'iotInstanceId' => 'IotInstanceId',
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
        if (null !== $this->parserId) {
            $res['ParserId'] = $this->parserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachDestinationRequest
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
        if (isset($map['ParserId'])) {
            $model->parserId = $map['ParserId'];
        }

        return $model;
    }
}
