<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeHiTSDBInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class securityIpList extends Model
{
    /**
     * @description The IP address in the whitelist of the instance.
     *
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $ip;
    protected $_name = [
        'ip' => 'Ip',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityIpList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
