<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsCacheDomainsResponseBody\domains;

use AlibabaCloud\Tea\Model;

class sourceDnsServers extends Model
{
    /**
     * @example ns8.alidns.com
     *
     * @var string
     */
    public $host;

    /**
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
     * @return sourceDnsServers
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
