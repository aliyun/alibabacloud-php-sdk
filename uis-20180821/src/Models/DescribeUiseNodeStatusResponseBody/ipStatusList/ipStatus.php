<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUiseNodeStatusResponseBody\ipStatusList;

use AlibabaCloud\Tea\Model;

class ipStatus extends Model
{
    /**
     * @var int
     */
    public $currentConnections;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var int
     */
    public $maxConnections;
    protected $_name = [
        'currentConnections' => 'CurrentConnections',
        'ip'                 => 'Ip',
        'maxConnections'     => 'MaxConnections',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentConnections) {
            $res['CurrentConnections'] = $this->currentConnections;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentConnections'])) {
            $model->currentConnections = $map['CurrentConnections'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }

        return $model;
    }
}
