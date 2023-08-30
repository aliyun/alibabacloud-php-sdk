<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListConnectorsResponseBody\connectors;

use AlibabaCloud\Tea\Model;

class connectorClients extends Model
{
    /**
     * @var string
     */
    public $connectionStatus;

    /**
     * @var string
     */
    public $devTag;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $publicIp;
    protected $_name = [
        'connectionStatus' => 'ConnectionStatus',
        'devTag'           => 'DevTag',
        'hostname'         => 'Hostname',
        'publicIp'         => 'PublicIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }
        if (null !== $this->devTag) {
            $res['DevTag'] = $this->devTag;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->publicIp) {
            $res['PublicIp'] = $this->publicIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connectorClients
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }
        if (isset($map['DevTag'])) {
            $model->devTag = $map['DevTag'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['PublicIp'])) {
            $model->publicIp = $map['PublicIp'];
        }

        return $model;
    }
}
