<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute\routeDestinations;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute\routeDestinations\destination\port;

class destination extends Model
{
    /**
     * @var string
     */
    public $host;

    /**
     * @var port
     */
    public $port;

    /**
     * @var string
     */
    public $subset;
    protected $_name = [
        'host' => 'Host',
        'port' => 'Port',
        'subset' => 'Subset',
    ];

    public function validate()
    {
        if (null !== $this->port) {
            $this->port->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->port) {
            $res['Port'] = null !== $this->port ? $this->port->toArray($noStream) : $this->port;
        }

        if (null !== $this->subset) {
            $res['Subset'] = $this->subset;
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
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['Port'])) {
            $model->port = port::fromMap($map['Port']);
        }

        if (isset($map['Subset'])) {
            $model->subset = $map['Subset'];
        }

        return $model;
    }
}
