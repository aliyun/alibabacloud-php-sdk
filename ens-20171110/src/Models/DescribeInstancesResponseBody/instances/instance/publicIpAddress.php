<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Tea\Model;

class publicIpAddress extends Model
{
    /**
     * @var string[]
     */
    public $ipAddress;
    protected $_name = [
        'ipAddress' => 'IpAddress',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publicIpAddress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpAddress'])) {
            if (!empty($map['IpAddress'])) {
                $model->ipAddress = $map['IpAddress'];
            }
        }

        return $model;
    }
}
