<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class ActivateAllInOneGatewayRequest extends Model
{
    /**
     * @var string
     */
    public $clientUUID;

    /**
     * @var string
     */
    public $deviceNumber;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $serialNumber;
    protected $_name = [
        'clientUUID'    => 'ClientUUID',
        'deviceNumber'  => 'DeviceNumber',
        'gatewayId'     => 'GatewayId',
        'model'         => 'Model',
        'securityToken' => 'SecurityToken',
        'serialNumber'  => 'SerialNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientUUID) {
            $res['ClientUUID'] = $this->clientUUID;
        }
        if (null !== $this->deviceNumber) {
            $res['DeviceNumber'] = $this->deviceNumber;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ActivateAllInOneGatewayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientUUID'])) {
            $model->clientUUID = $map['ClientUUID'];
        }
        if (isset($map['DeviceNumber'])) {
            $model->deviceNumber = $map['DeviceNumber'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }

        return $model;
    }
}
