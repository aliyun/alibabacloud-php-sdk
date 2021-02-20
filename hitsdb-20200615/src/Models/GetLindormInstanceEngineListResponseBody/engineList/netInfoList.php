<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceEngineListResponseBody\engineList;

use AlibabaCloud\Tea\Model;

class netInfoList extends Model
{
    /**
     * @var int
     */
    public $accessType;

    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $netType;

    /**
     * @var int
     */
    public $port;
    protected $_name = [
        'accessType'       => 'AccessType',
        'connectionString' => 'ConnectionString',
        'netType'          => 'NetType',
        'port'             => 'Port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return netInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
