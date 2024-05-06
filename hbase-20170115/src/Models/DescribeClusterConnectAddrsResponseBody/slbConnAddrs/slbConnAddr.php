<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterConnectAddrsResponseBody\slbConnAddrs;

use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterConnectAddrsResponseBody\slbConnAddrs\slbConnAddr\connAddrInfo;
use AlibabaCloud\Tea\Model;

class slbConnAddr extends Model
{
    /**
     * @var connAddrInfo
     */
    public $connAddrInfo;

    /**
     * @var string
     */
    public $slbType;
    protected $_name = [
        'connAddrInfo' => 'ConnAddrInfo',
        'slbType'      => 'SlbType',
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
        if (null !== $this->slbType) {
            $res['SlbType'] = $this->slbType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slbConnAddr
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnAddrInfo'])) {
            $model->connAddrInfo = connAddrInfo::fromMap($map['ConnAddrInfo']);
        }
        if (isset($map['SlbType'])) {
            $model->slbType = $map['SlbType'];
        }

        return $model;
    }
}
