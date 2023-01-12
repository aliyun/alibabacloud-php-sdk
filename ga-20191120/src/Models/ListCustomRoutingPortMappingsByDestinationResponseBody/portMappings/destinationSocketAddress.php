<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingPortMappingsByDestinationResponseBody\portMappings;

use AlibabaCloud\Tea\Model;

class destinationSocketAddress extends Model
{
    /**
     * @description The service IP address of the backend instance.
     *
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @description The service port of the backend instance.
     *
     * @example 443
     *
     * @var int
     */
    public $port;
    protected $_name = [
        'ipAddress' => 'IpAddress',
        'port'      => 'Port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return destinationSocketAddress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
