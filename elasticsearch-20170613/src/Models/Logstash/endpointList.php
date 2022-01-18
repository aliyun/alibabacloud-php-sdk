<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\Logstash;

use AlibabaCloud\Tea\Model;

class endpointList extends Model
{
    /**
     * @description Host
     *
     * @var string
     */
    public $host;

    /**
     * @description Port
     *
     * @var int
     */
    public $port;

    /**
     * @description ZoneId
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'host'   => 'host',
        'port'   => 'port',
        'zoneId' => 'zoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->host) {
            $res['host'] = $this->host;
        }
        if (null !== $this->port) {
            $res['port'] = $this->port;
        }
        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpointList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['host'])) {
            $model->host = $map['host'];
        }
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }
        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        return $model;
    }
}
