<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeEndpointsResponseBody\connAddrs;

use AlibabaCloud\Tea\Model;

class connAddrInfo extends Model
{
    /**
     * @var string
     */
    public $connAddrPort;

    /**
     * @var string
     */
    public $netType;

    /**
     * @var string
     */
    public $connAddr;

    /**
     * @var string
     */
    public $connType;
    protected $_name = [
        'connAddrPort' => 'ConnAddrPort',
        'netType'      => 'NetType',
        'connAddr'     => 'ConnAddr',
        'connType'     => 'ConnType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connAddrPort) {
            $res['ConnAddrPort'] = $this->connAddrPort;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->connAddr) {
            $res['ConnAddr'] = $this->connAddr;
        }
        if (null !== $this->connType) {
            $res['ConnType'] = $this->connType;
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
        if (isset($map['ConnAddrPort'])) {
            $model->connAddrPort = $map['ConnAddrPort'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['ConnAddr'])) {
            $model->connAddr = $map['ConnAddr'];
        }
        if (isset($map['ConnType'])) {
            $model->connType = $map['ConnType'];
        }

        return $model;
    }
}
