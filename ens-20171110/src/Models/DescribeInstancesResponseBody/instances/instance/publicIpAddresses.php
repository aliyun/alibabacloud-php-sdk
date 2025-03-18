<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance\publicIpAddresses\publicIpAddress;
use AlibabaCloud\Tea\Model;

class publicIpAddresses extends Model
{
    /**
     * @var publicIpAddress[]
     */
    public $publicIpAddress;
    protected $_name = [
        'publicIpAddress' => 'PublicIpAddress',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = [];
            if (null !== $this->publicIpAddress && \is_array($this->publicIpAddress)) {
                $n = 0;
                foreach ($this->publicIpAddress as $item) {
                    $res['PublicIpAddress'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publicIpAddresses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PublicIpAddress'])) {
            if (!empty($map['PublicIpAddress'])) {
                $model->publicIpAddress = [];
                $n = 0;
                foreach ($map['PublicIpAddress'] as $item) {
                    $model->publicIpAddress[$n++] = null !== $item ? publicIpAddress::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
