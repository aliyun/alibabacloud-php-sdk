<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeClusterConnectionResponseBody\serviceConnAddrs;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeClusterConnectionResponseBody\serviceConnAddrs\serviceConnAddr\connAddrInfo;
use AlibabaCloud\Tea\Model;

class serviceConnAddr extends Model
{
    /**
     * @var connAddrInfo
     */
    public $connAddrInfo;

    /**
     * @var string
     */
    public $connType;
    protected $_name = [
        'connAddrInfo' => 'ConnAddrInfo',
        'connType'     => 'ConnType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connAddrInfo) {
            $res['ConnAddrInfo'] = null !== $this->connAddrInfo ? $this->connAddrInfo->toMap() : null;
        }
        if (null !== $this->connType) {
            $res['ConnType'] = $this->connType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceConnAddr
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnAddrInfo'])) {
            $model->connAddrInfo = connAddrInfo::fromMap($map['ConnAddrInfo']);
        }
        if (isset($map['ConnType'])) {
            $model->connType = $map['ConnType'];
        }

        return $model;
    }
}
