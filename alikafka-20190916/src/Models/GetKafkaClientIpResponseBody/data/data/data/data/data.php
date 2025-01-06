<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetKafkaClientIpResponseBody\data\data\data\data;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The IP address of the client.
     *
     * @example 58.210.117.154
     *
     * @var string
     */
    public $ip;

    /**
     * @description The statistics.
     *
     * >  The value of this parameter indicates the number of connections on different ports of the IP address within the specified period of time.
     * @example 3
     *
     * @var int
     */
    public $num;
    protected $_name = [
        'ip'  => 'Ip',
        'num' => 'Num',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }

        return $model;
    }
}
