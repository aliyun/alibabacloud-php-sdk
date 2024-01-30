<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceProvidersPageResponseBody\data;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The remarks of the service provider.
     *
     * @example 172.178.XX.XX
     *
     * @var string
     */
    public $iannotations;

    /**
     * @description The IP address of the service provider.
     *
     * @example 10.20.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The port number of the service provider.
     *
     * @example 12345
     *
     * @var string
     */
    public $port;

    /**
     * @description The serialization type.
     *
     * @example hessian2
     *
     * @var string
     */
    public $serializeType;

    /**
     * @description The service timeout period.
     *
     * @example 1000
     *
     * @var string
     */
    public $timeout;
    protected $_name = [
        'iannotations'  => 'Iannotations',
        'ip'            => 'Ip',
        'port'          => 'Port',
        'serializeType' => 'SerializeType',
        'timeout'       => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iannotations) {
            $res['Iannotations'] = $this->iannotations;
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
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
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
        if (isset($map['Iannotations'])) {
            $model->iannotations = $map['Iannotations'];
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
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
