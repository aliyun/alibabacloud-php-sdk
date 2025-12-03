<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeEndpointsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeEndpointsResponseBody\connAddrs\connAddrInfo;

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
        if (\is_array($this->connAddrInfo)) {
            Model::validateArray($this->connAddrInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connAddrInfo) {
            if (\is_array($this->connAddrInfo)) {
                $res['ConnAddrInfo'] = [];
                $n1 = 0;
                foreach ($this->connAddrInfo as $item1) {
                    $res['ConnAddrInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['ConnAddrInfo'])) {
                $model->connAddrInfo = [];
                $n1 = 0;
                foreach ($map['ConnAddrInfo'] as $item1) {
                    $model->connAddrInfo[$n1] = connAddrInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
