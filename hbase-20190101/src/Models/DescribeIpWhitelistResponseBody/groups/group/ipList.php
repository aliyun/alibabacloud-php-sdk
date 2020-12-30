<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeIpWhitelistResponseBody\groups\group;

use AlibabaCloud\Tea\Model;

class ipList extends Model
{
    /**
     * @var string[]
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
     * @return ipList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ip'])) {
            if (!empty($map['Ip'])) {
                $model->ip = $map['Ip'];
            }
        }

        return $model;
    }
}
