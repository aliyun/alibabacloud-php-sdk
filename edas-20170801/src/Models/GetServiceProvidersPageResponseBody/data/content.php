<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceProvidersPageResponseBody\data;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $timeout;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $serializeType;
    protected $_name = [
        'timeout'       => 'Timeout',
        'ip'            => 'Ip',
        'port'          => 'Port',
        'serializeType' => 'SerializeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->serializeType) {
            $res['SerializeType'] = $this->serializeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['SerializeType'])) {
            $model->serializeType = $map['SerializeType'];
        }

        return $model;
    }
}
