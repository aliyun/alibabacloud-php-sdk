<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeClusterConnectionResponseBody;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeClusterConnectionResponseBody\slbConnAddrs\slbConnAddr;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->slbConnAddr) {
            $res['SlbConnAddr'] = [];
            if (null !== $this->slbConnAddr && \is_array($this->slbConnAddr)) {
                $n = 0;
                foreach ($this->slbConnAddr as $item) {
                    $res['SlbConnAddr'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slbConnAddrs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SlbConnAddr'])) {
            if (!empty($map['SlbConnAddr'])) {
                $model->slbConnAddr = [];
                $n                  = 0;
                foreach ($map['SlbConnAddr'] as $item) {
                    $model->slbConnAddr[$n++] = null !== $item ? slbConnAddr::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
