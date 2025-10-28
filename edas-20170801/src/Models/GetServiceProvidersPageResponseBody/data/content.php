<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceProvidersPageResponseBody\data;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $iannotations;

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

    /**
     * @var string
     */
    public $timeout;
    protected $_name = [
        'iannotations' => 'Iannotations',
        'ip' => 'Ip',
        'port' => 'Port',
        'serializeType' => 'SerializeType',
        'timeout' => 'Timeout',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
