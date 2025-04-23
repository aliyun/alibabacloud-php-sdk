<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsCacheDomainRequest;

use AlibabaCloud\Dara\Model;

class sourceDnsServer extends Model
{
    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $port;
    protected $_name = [
        'host' => 'Host',
        'port' => 'Port',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $model->port = $map['Port'];
        }

        return $model;
    }
}
