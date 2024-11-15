<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetKafkaClientIpResponseBody\data\data\data\data;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 58.210.117.154
     *
     * @var string
     */
    public $ip;

    /**
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
