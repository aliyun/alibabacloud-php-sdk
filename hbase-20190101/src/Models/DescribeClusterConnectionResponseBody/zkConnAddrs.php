<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeClusterConnectionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeClusterConnectionResponseBody\zkConnAddrs\zkConnAddr;

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
        if (\is_array($this->zkConnAddr)) {
            Model::validateArray($this->zkConnAddr);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->zkConnAddr) {
            if (\is_array($this->zkConnAddr)) {
                $res['ZkConnAddr'] = [];
                $n1 = 0;
                foreach ($this->zkConnAddr as $item1) {
                    $res['ZkConnAddr'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ZkConnAddr'])) {
            if (!empty($map['ZkConnAddr'])) {
                $model->zkConnAddr = [];
                $n1 = 0;
                foreach ($map['ZkConnAddr'] as $item1) {
                    $model->zkConnAddr[$n1] = zkConnAddr::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
