<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterConnectAddrsResponseBody;

use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterConnectAddrsResponseBody\serviceConnAddrs\serviceConnAddr;
use AlibabaCloud\Tea\Model;

class serviceConnAddrs extends Model
{
    /**
     * @var serviceConnAddr[]
     */
    public $serviceConnAddr;
    protected $_name = [
        'serviceConnAddr' => 'ServiceConnAddr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceConnAddr) {
            $res['ServiceConnAddr'] = [];
            if (null !== $this->serviceConnAddr && \is_array($this->serviceConnAddr)) {
                $n = 0;
                foreach ($this->serviceConnAddr as $item) {
                    $res['ServiceConnAddr'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceConnAddrs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceConnAddr'])) {
            if (!empty($map['ServiceConnAddr'])) {
                $model->serviceConnAddr = [];
                $n                      = 0;
                foreach ($map['ServiceConnAddr'] as $item) {
                    $model->serviceConnAddr[$n++] = null !== $item ? serviceConnAddr::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
