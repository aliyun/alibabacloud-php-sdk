<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeClusterConnectionResponseBody\slbConnAddrs\slbConnAddr;

use AlibabaCloud\Tea\Model;

class connAddrInfo extends Model
{
    /**
     * @example ld-bp150tns0sjxs****-proxy-hbaseue-pub.hbaseue.rds.aliyuncs.com
     *
     * @var string
     */
    public $connAddr;

    /**
     * @example 9190
     *
     * @var string
     */
    public $connAddrPort;

    /**
     * @example 0
     *
     * @var string
     */
    public $netType;
    protected $_name = [
        'connAddr'     => 'ConnAddr',
        'connAddrPort' => 'ConnAddrPort',
        'netType'      => 'NetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connAddr) {
            $res['ConnAddr'] = $this->connAddr;
        }
        if (null !== $this->connAddrPort) {
            $res['ConnAddrPort'] = $this->connAddrPort;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connAddrInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnAddr'])) {
            $model->connAddr = $map['ConnAddr'];
        }
        if (isset($map['ConnAddrPort'])) {
            $model->connAddrPort = $map['ConnAddrPort'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }

        return $model;
    }
}
