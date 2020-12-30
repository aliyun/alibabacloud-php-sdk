<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeClusterConnectionResponseBody;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeClusterConnectionResponseBody\zkConnAddrs\zkConnAddr;
use AlibabaCloud\Tea\Model;

class zkConnAddrs extends Model
{
    /**
     * @var zkConnAddr[]
     */
    public $zkConnAddr;
    protected $_name = [
        'zkConnAddr' => 'ZkConnAddr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zkConnAddr) {
            $res['ZkConnAddr'] = [];
            if (null !== $this->zkConnAddr && \is_array($this->zkConnAddr)) {
                $n = 0;
                foreach ($this->zkConnAddr as $item) {
                    $res['ZkConnAddr'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zkConnAddrs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZkConnAddr'])) {
            if (!empty($map['ZkConnAddr'])) {
                $model->zkConnAddr = [];
                $n                 = 0;
                foreach ($map['ZkConnAddr'] as $item) {
                    $model->zkConnAddr[$n++] = null !== $item ? zkConnAddr::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
