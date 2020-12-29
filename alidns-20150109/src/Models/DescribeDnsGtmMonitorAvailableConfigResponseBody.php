<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponseBody\domainIpv4IspCityNodes;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponseBody\domainIpv6IspCityNodes;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponseBody\ipv4IspCityNodes;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponseBody\ipv6IspCityNodes;
use AlibabaCloud\Tea\Model;

class DescribeDnsGtmMonitorAvailableConfigResponseBody extends Model
{
    /**
     * @var ipv4IspCityNodes[]
     */
    public $ipv4IspCityNodes;

    /**
     * @var domainIpv4IspCityNodes[]
     */
    public $domainIpv4IspCityNodes;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var domainIpv6IspCityNodes[]
     */
    public $domainIpv6IspCityNodes;

    /**
     * @var ipv6IspCityNodes[]
     */
    public $ipv6IspCityNodes;
    protected $_name = [
        'ipv4IspCityNodes'       => 'Ipv4IspCityNodes',
        'domainIpv4IspCityNodes' => 'DomainIpv4IspCityNodes',
        'requestId'              => 'RequestId',
        'domainIpv6IspCityNodes' => 'DomainIpv6IspCityNodes',
        'ipv6IspCityNodes'       => 'Ipv6IspCityNodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv4IspCityNodes) {
            $res['Ipv4IspCityNodes'] = [];
            if (null !== $this->ipv4IspCityNodes && \is_array($this->ipv4IspCityNodes)) {
                $n = 0;
                foreach ($this->ipv4IspCityNodes as $item) {
                    $res['Ipv4IspCityNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->domainIpv4IspCityNodes) {
            $res['DomainIpv4IspCityNodes'] = [];
            if (null !== $this->domainIpv4IspCityNodes && \is_array($this->domainIpv4IspCityNodes)) {
                $n = 0;
                foreach ($this->domainIpv4IspCityNodes as $item) {
                    $res['DomainIpv4IspCityNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainIpv6IspCityNodes) {
            $res['DomainIpv6IspCityNodes'] = [];
            if (null !== $this->domainIpv6IspCityNodes && \is_array($this->domainIpv6IspCityNodes)) {
                $n = 0;
                foreach ($this->domainIpv6IspCityNodes as $item) {
                    $res['DomainIpv6IspCityNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ipv6IspCityNodes) {
            $res['Ipv6IspCityNodes'] = [];
            if (null !== $this->ipv6IspCityNodes && \is_array($this->ipv6IspCityNodes)) {
                $n = 0;
                foreach ($this->ipv6IspCityNodes as $item) {
                    $res['Ipv6IspCityNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDnsGtmMonitorAvailableConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv4IspCityNodes'])) {
            if (!empty($map['Ipv4IspCityNodes'])) {
                $model->ipv4IspCityNodes = [];
                $n                       = 0;
                foreach ($map['Ipv4IspCityNodes'] as $item) {
                    $model->ipv4IspCityNodes[$n++] = null !== $item ? ipv4IspCityNodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DomainIpv4IspCityNodes'])) {
            if (!empty($map['DomainIpv4IspCityNodes'])) {
                $model->domainIpv4IspCityNodes = [];
                $n                             = 0;
                foreach ($map['DomainIpv4IspCityNodes'] as $item) {
                    $model->domainIpv4IspCityNodes[$n++] = null !== $item ? domainIpv4IspCityNodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainIpv6IspCityNodes'])) {
            if (!empty($map['DomainIpv6IspCityNodes'])) {
                $model->domainIpv6IspCityNodes = [];
                $n                             = 0;
                foreach ($map['DomainIpv6IspCityNodes'] as $item) {
                    $model->domainIpv6IspCityNodes[$n++] = null !== $item ? domainIpv6IspCityNodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Ipv6IspCityNodes'])) {
            if (!empty($map['Ipv6IspCityNodes'])) {
                $model->ipv6IspCityNodes = [];
                $n                       = 0;
                foreach ($map['Ipv6IspCityNodes'] as $item) {
                    $model->ipv6IspCityNodes[$n++] = null !== $item ? ipv6IspCityNodes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
