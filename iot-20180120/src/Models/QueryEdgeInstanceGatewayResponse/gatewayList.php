<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceGatewayResponse;

use AlibabaCloud\Tea\Model;

class gatewayList extends Model
{
    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $edgeVersion;

    /**
     * @var string
     */
    public $iotId;

    /**
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
        Model::validateRequired('deviceName', $this->deviceName, true);
        Model::validateRequired('edgeVersion', $this->edgeVersion, true);
        Model::validateRequired('iotId', $this->iotId, true);
        Model::validateRequired('productKey', $this->productKey, true);
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
