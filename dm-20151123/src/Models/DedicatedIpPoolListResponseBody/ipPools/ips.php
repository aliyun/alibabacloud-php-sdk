<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpPoolListResponseBody\ipPools;

use AlibabaCloud\Tea\Model;

class ips extends Model
{
    /**
     * @description Instance purchase ID
     *
     * @example xxx
     *
     * @var string
     */
    public $id;

    /**
     * @description IP address
     *
     * @example xxx
     *
     * @var string
     */
    public $ip;
    protected $_name = [
        'id' => 'Id',
        'ip' => 'Ip',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ips
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
