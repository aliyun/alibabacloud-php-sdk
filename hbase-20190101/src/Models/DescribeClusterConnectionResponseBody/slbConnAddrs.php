<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeClusterConnectionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeClusterConnectionResponseBody\slbConnAddrs\slbConnAddr;

class slbConnAddrs extends Model
{
    /**
     * @var slbConnAddr[]
     */
    public $slbConnAddr;
    protected $_name = [
        'slbConnAddr' => 'SlbConnAddr',
    ];

    public function validate()
    {
        if (\is_array($this->slbConnAddr)) {
            Model::validateArray($this->slbConnAddr);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->slbConnAddr) {
            if (\is_array($this->slbConnAddr)) {
                $res['SlbConnAddr'] = [];
                $n1 = 0;
                foreach ($this->slbConnAddr as $item1) {
                    $res['SlbConnAddr'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SlbConnAddr'])) {
            if (!empty($map['SlbConnAddr'])) {
                $model->slbConnAddr = [];
                $n1 = 0;
                foreach ($map['SlbConnAddr'] as $item1) {
                    $model->slbConnAddr[$n1] = slbConnAddr::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
