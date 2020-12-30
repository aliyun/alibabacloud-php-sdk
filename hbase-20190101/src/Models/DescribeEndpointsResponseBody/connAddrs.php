<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeEndpointsResponseBody;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeEndpointsResponseBody\connAddrs\connAddrInfo;
use AlibabaCloud\Tea\Model;

class connAddrs extends Model
{
    /**
     * @var connAddrInfo[]
     */
    public $connAddrInfo;
    protected $_name = [
        'connAddrInfo' => 'ConnAddrInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connAddrInfo) {
            $res['ConnAddrInfo'] = [];
            if (null !== $this->connAddrInfo && \is_array($this->connAddrInfo)) {
                $n = 0;
                foreach ($this->connAddrInfo as $item) {
                    $res['ConnAddrInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connAddrs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnAddrInfo'])) {
            if (!empty($map['ConnAddrInfo'])) {
                $model->connAddrInfo = [];
                $n                   = 0;
                foreach ($map['ConnAddrInfo'] as $item) {
                    $model->connAddrInfo[$n++] = null !== $item ? connAddrInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
