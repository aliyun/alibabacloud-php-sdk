<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeClusterConnectionResponseBody\slbConnAddrs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeClusterConnectionResponseBody\slbConnAddrs\slbConnAddr\connAddrInfo;

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
        'slbType' => 'SlbType',
    ];

    public function validate()
    {
        if (null !== $this->connAddrInfo) {
            $this->connAddrInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connAddrInfo) {
            $res['ConnAddrInfo'] = null !== $this->connAddrInfo ? $this->connAddrInfo->toArray($noStream) : $this->connAddrInfo;
        }

        if (null !== $this->slbType) {
            $res['SlbType'] = $this->slbType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
