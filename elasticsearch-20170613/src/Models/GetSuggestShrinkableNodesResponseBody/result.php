<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetSuggestShrinkableNodesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $host;
    protected $_name = [
        'port' => 'port',
        'host' => 'host',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->port) {
            $res['port'] = $this->port;
        }
        if (null !== $this->host) {
            $res['host'] = $this->host;
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
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }
        if (isset($map['host'])) {
            $model->host = $map['host'];
        }

        return $model;
    }
}
