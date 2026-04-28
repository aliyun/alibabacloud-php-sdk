<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGatewayAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class endpoints extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var string
     */
    public $gwClusterId;

    /**
     * @var string
     */
    public $netType;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $tunnelId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'address' => 'Address',
        'endpointId' => 'EndpointId',
        'gwClusterId' => 'GwClusterId',
        'netType' => 'NetType',
        'port' => 'Port',
        'tunnelId' => 'TunnelId',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }

        if (null !== $this->gwClusterId) {
            $res['GwClusterId'] = $this->gwClusterId;
        }

        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->tunnelId) {
            $res['TunnelId'] = $this->tunnelId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }

        if (isset($map['GwClusterId'])) {
            $model->gwClusterId = $map['GwClusterId'];
        }

        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['TunnelId'])) {
            $model->tunnelId = $map['TunnelId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
