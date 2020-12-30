<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeClusterConnectionResponseBody;

use AlibabaCloud\Tea\Model;

class uiProxyConnAddrInfo extends Model
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
    protected $_name = [
        'connAddrPort' => 'ConnAddrPort',
        'netType'      => 'NetType',
        'connAddr'     => 'ConnAddr',
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
        if (isset($map['ConnAddrPort'])) {
            $model->connAddrPort = $map['ConnAddrPort'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['ConnAddr'])) {
            $model->connAddr = $map['ConnAddr'];
        }

        return $model;
    }
}
