<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

class MultiClusterNetworksValue extends Model
{
    /**
     * @var string
     */
    public $network;

    /**
     * @var bool
     */
    public $enableGateway;

    /**
     * @var string
     */
    public $customGatewayAddress;

    /**
     * @var string
     */
    public $gatewayName;
    protected $_name = [
        'network' => 'Network',
        'enableGateway' => 'EnableGateway',
        'customGatewayAddress' => 'CustomGatewayAddress',
        'gatewayName' => 'GatewayName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }

        if (null !== $this->enableGateway) {
            $res['EnableGateway'] = $this->enableGateway;
        }

        if (null !== $this->customGatewayAddress) {
            $res['CustomGatewayAddress'] = $this->customGatewayAddress;
        }

        if (null !== $this->gatewayName) {
            $res['GatewayName'] = $this->gatewayName;
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
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }

        if (isset($map['EnableGateway'])) {
            $model->enableGateway = $map['EnableGateway'];
        }

        if (isset($map['CustomGatewayAddress'])) {
            $model->customGatewayAddress = $map['CustomGatewayAddress'];
        }

        if (isset($map['GatewayName'])) {
            $model->gatewayName = $map['GatewayName'];
        }

        return $model;
    }
}
