<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsCacheDomainRequest;

use AlibabaCloud\Tea\Model;

class sourceDnsServer extends Model
{
    /**
     * @description The domain name or IP address of the origin DNS server.
     *
     * This parameter is required.
     * @example 192.0.0.0
     *
     * @var string
     */
    public $host;

    /**
     * @description The port of the origin DNS server.
     *
     * This parameter is required.
     * @example 53
     *
     * @var string
     */
    public $port;
    protected $_name = [
        'host' => 'Host',
        'port' => 'Port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceDnsServer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
