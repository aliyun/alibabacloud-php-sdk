<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ReplaceEdgeInstanceGatewayRequest extends Model
{
    /**
     * @example oTCJomvT95WPyPPQ5sje******
     *
     * @var string
     */
    public $currentGatewayId;

    /**
     * @example G4TGWGYwpo8zwr******
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example 65SkFyhZcU5d3PO2Ri13******
     *
     * @var string
     */
    public $newGatewayId;
    protected $_name = [
        'currentGatewayId' => 'CurrentGatewayId',
        'instanceId'       => 'InstanceId',
        'iotInstanceId'    => 'IotInstanceId',
        'newGatewayId'     => 'NewGatewayId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentGatewayId) {
            $res['CurrentGatewayId'] = $this->currentGatewayId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->newGatewayId) {
            $res['NewGatewayId'] = $this->newGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReplaceEdgeInstanceGatewayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentGatewayId'])) {
            $model->currentGatewayId = $map['CurrentGatewayId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['NewGatewayId'])) {
            $model->newGatewayId = $map['NewGatewayId'];
        }

        return $model;
    }
}
