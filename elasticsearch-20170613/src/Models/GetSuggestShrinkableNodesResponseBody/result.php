<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetSuggestShrinkableNodesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 192.168.**.**
     *
     * @var string
     */
    public $host;

    /**
     * @example 9200
     *
     * @var int
     */
    public $port;
    protected $_name = [
        'host' => 'host',
        'port' => 'port',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
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

        return $model;
    }
}
