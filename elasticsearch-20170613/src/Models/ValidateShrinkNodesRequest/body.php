<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ValidateShrinkNodesRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'host' => 'host',
        'hostName' => 'hostName',
        'nodeType' => 'nodeType',
        'port' => 'port',
        'zoneId' => 'zoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->host) {
            $res['host'] = $this->host;
        }

        if (null !== $this->hostName) {
            $res['hostName'] = $this->hostName;
        }

        if (null !== $this->nodeType) {
            $res['nodeType'] = $this->nodeType;
        }

        if (null !== $this->port) {
            $res['port'] = $this->port;
        }

        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
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
        if (isset($map['host'])) {
            $model->host = $map['host'];
        }

        if (isset($map['hostName'])) {
            $model->hostName = $map['hostName'];
        }

        if (isset($map['nodeType'])) {
            $model->nodeType = $map['nodeType'];
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
