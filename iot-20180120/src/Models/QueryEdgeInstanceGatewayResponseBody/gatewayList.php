<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceGatewayResponseBody;

use AlibabaCloud\Tea\Model;

class gatewayList extends Model
{
    /**
     * @description The name of the gateway.
     *
     * @example gateway_01
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The version number of Link IoT Edge.
     *
     * @example v1.0.0
     *
     * @var string
     */
    public $edgeVersion;

    /**
     * @description The ID of the gateway in IoT Platform.
     *
     * @example LuD9x5hiRUdVemWU****000101
     *
     * @var string
     */
    public $iotId;

    /**
     * @description The key that uniquely identifies the product to which the gateway belongs.
     *
     * @example a1mAdeG****
     *
     * @var string
     */
    public $productKey;
    protected $_name = [
        'deviceName'  => 'DeviceName',
        'edgeVersion' => 'EdgeVersion',
        'iotId'       => 'IotId',
        'productKey'  => 'ProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->edgeVersion) {
            $res['EdgeVersion'] = $this->edgeVersion;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gatewayList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['EdgeVersion'])) {
            $model->edgeVersion = $map['EdgeVersion'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
