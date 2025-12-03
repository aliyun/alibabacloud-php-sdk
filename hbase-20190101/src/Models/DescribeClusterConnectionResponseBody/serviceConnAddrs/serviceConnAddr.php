<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeClusterConnectionResponseBody\serviceConnAddrs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeClusterConnectionResponseBody\serviceConnAddrs\serviceConnAddr\connAddrInfo;

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
        'connType' => 'ConnType',
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

        if (null !== $this->connType) {
            $res['ConnType'] = $this->connType;
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

        if (isset($map['ConnType'])) {
            $model->connType = $map['ConnType'];
        }

        return $model;
    }
}
