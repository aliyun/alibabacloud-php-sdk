<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortMaxConnsResponseBody;

use AlibabaCloud\Dara\Model;

class portMaxConns extends Model
{
    /**
     * @var int
     */
    public $cps;
    /**
     * @var string
     */
    public $ip;
    /**
     * @var string
     */
    public $port;
    protected $_name = [
        'cps'  => 'Cps',
        'ip'   => 'Ip',
        'port' => 'Port',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cps) {
            $res['Cps'] = $this->cps;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
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
        if (isset($map['Cps'])) {
            $model->cps = $map['Cps'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
