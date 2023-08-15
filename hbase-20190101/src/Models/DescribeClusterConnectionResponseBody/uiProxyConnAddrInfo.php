<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeClusterConnectionResponseBody;

use AlibabaCloud\Tea\Model;

class uiProxyConnAddrInfo extends Model
{
    /**
     * @example ld-bp150tns0sjxs****-master1-001.hbaseue.rds.aliyuncs.com
     *
     * @var string
     */
    public $connAddr;

    /**
     * @example 443
     *
     * @var string
     */
    public $connAddrPort;

    /**
     * @example PUBLIC
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
     * @return uiProxyConnAddrInfo
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
