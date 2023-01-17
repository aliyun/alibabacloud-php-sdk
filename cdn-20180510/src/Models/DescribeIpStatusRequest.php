<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeIpStatusRequest extends Model
{
    /**
     * @description The IP addresses that you want to query. Separate IP addresses with underscores (\_), such as Ips=ip1\_ip2.
     *
     * @example ip1_ip2
     *
     * @var string
     */
    public $ips;
    protected $_name = [
        'ips' => 'Ips',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ips) {
            $res['Ips'] = $this->ips;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ips'])) {
            $model->ips = $map['Ips'];
        }

        return $model;
    }
}
