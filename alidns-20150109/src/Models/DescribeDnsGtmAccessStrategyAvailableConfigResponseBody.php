<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody\domainAddrPools;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody\ipv4AddrPools;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody\ipv6AddrPools;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody\lines;
use AlibabaCloud\Tea\Model;

class DescribeDnsGtmAccessStrategyAvailableConfigResponseBody extends Model
{
    /**
     * @var domainAddrPools[]
     */
    public $domainAddrPools;

    /**
     * @var ipv4AddrPools[]
     */
    public $ipv4AddrPools;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ipv6AddrPools[]
     */
    public $ipv6AddrPools;

    /**
     * @var bool
     */
    public $suggestSetDefaultLine;

    /**
     * @var lines[]
     */
    public $lines;
    protected $_name = [
        'domainAddrPools'       => 'DomainAddrPools',
        'ipv4AddrPools'         => 'Ipv4AddrPools',
        'requestId'             => 'RequestId',
        'ipv6AddrPools'         => 'Ipv6AddrPools',
        'suggestSetDefaultLine' => 'SuggestSetDefaultLine',
        'lines'                 => 'Lines',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainAddrPools) {
            $res['DomainAddrPools'] = [];
            if (null !== $this->domainAddrPools && \is_array($this->domainAddrPools)) {
                $n = 0;
                foreach ($this->domainAddrPools as $item) {
                    $res['DomainAddrPools'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ipv4AddrPools) {
            $res['Ipv4AddrPools'] = [];
            if (null !== $this->ipv4AddrPools && \is_array($this->ipv4AddrPools)) {
                $n = 0;
                foreach ($this->ipv4AddrPools as $item) {
                    $res['Ipv4AddrPools'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ipv6AddrPools) {
            $res['Ipv6AddrPools'] = [];
            if (null !== $this->ipv6AddrPools && \is_array($this->ipv6AddrPools)) {
                $n = 0;
                foreach ($this->ipv6AddrPools as $item) {
                    $res['Ipv6AddrPools'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->suggestSetDefaultLine) {
            $res['SuggestSetDefaultLine'] = $this->suggestSetDefaultLine;
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
     * @return DescribeDnsGtmAccessStrategyAvailableConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainAddrPools'])) {
            if (!empty($map['DomainAddrPools'])) {
                $model->domainAddrPools = [];
                $n                      = 0;
                foreach ($map['DomainAddrPools'] as $item) {
                    $model->domainAddrPools[$n++] = null !== $item ? domainAddrPools::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Ipv4AddrPools'])) {
            if (!empty($map['Ipv4AddrPools'])) {
                $model->ipv4AddrPools = [];
                $n                    = 0;
                foreach ($map['Ipv4AddrPools'] as $item) {
                    $model->ipv4AddrPools[$n++] = null !== $item ? ipv4AddrPools::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Ipv6AddrPools'])) {
            if (!empty($map['Ipv6AddrPools'])) {
                $model->ipv6AddrPools = [];
                $n                    = 0;
                foreach ($map['Ipv6AddrPools'] as $item) {
                    $model->ipv6AddrPools[$n++] = null !== $item ? ipv6AddrPools::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SuggestSetDefaultLine'])) {
            $model->suggestSetDefaultLine = $map['SuggestSetDefaultLine'];
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
