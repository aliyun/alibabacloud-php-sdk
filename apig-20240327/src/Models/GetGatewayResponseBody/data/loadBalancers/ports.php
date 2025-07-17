<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody\data\loadBalancers;

use AlibabaCloud\Tea\Model;

class ports extends Model
{
    /**
     * @description The port number.
     *
     * @example 443
     *
     * @var int
     */
    public $port;

    /**
     * @description The protocol. Valid values:
     *
     *   TCP
     *   UDP
     *
     * @example TCP
     *
     * @var string
     */
    public $protocol;
    protected $_name = [
        'port' => 'port',
        'protocol' => 'protocol',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->port) {
            $res['port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ports
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        return $model;
    }
}
