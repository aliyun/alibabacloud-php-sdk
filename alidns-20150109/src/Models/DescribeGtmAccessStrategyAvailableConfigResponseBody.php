<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyAvailableConfigResponseBody\addrPools;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyAvailableConfigResponseBody\lines;
use AlibabaCloud\Tea\Model;

class DescribeGtmAccessStrategyAvailableConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var addrPools[]
     */
    public $addrPools;

    /**
     * @var lines[]
     */
    public $lines;
    protected $_name = [
        'requestId' => 'RequestId',
        'addrPools' => 'AddrPools',
        'lines'     => 'Lines',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->addrPools) {
            $res['AddrPools'] = [];
            if (null !== $this->addrPools && \is_array($this->addrPools)) {
                $n = 0;
                foreach ($this->addrPools as $item) {
                    $res['AddrPools'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lines) {
            $res['Lines'] = [];
            if (null !== $this->lines && \is_array($this->lines)) {
                $n = 0;
                foreach ($this->lines as $item) {
                    $res['Lines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGtmAccessStrategyAvailableConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AddrPools'])) {
            if (!empty($map['AddrPools'])) {
                $model->addrPools = [];
                $n                = 0;
                foreach ($map['AddrPools'] as $item) {
                    $model->addrPools[$n++] = null !== $item ? addrPools::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Lines'])) {
            if (!empty($map['Lines'])) {
                $model->lines = [];
                $n            = 0;
                foreach ($map['Lines'] as $item) {
                    $model->lines[$n++] = null !== $item ? lines::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
