<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponseBody\domainIpv4IspCityNodes;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponseBody\domainIpv6IspCityNodes;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponseBody\ipv4IspCityNodes;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponseBody\ipv6IspCityNodes;

class DescribeDnsGtmMonitorAvailableConfigResponseBody extends Model
{
    /**
     * @var domainIpv4IspCityNodes
     */
    public $domainIpv4IspCityNodes;
    /**
     * @var domainIpv6IspCityNodes
     */
    public $domainIpv6IspCityNodes;
    /**
     * @var ipv4IspCityNodes
     */
    public $ipv4IspCityNodes;
    /**
     * @var ipv6IspCityNodes
     */
    public $ipv6IspCityNodes;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainIpv4IspCityNodes' => 'DomainIpv4IspCityNodes',
        'domainIpv6IspCityNodes' => 'DomainIpv6IspCityNodes',
        'ipv4IspCityNodes'       => 'Ipv4IspCityNodes',
        'ipv6IspCityNodes'       => 'Ipv6IspCityNodes',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->domainIpv4IspCityNodes) {
            $this->domainIpv4IspCityNodes->validate();
        }
        if (null !== $this->domainIpv6IspCityNodes) {
            $this->domainIpv6IspCityNodes->validate();
        }
        if (null !== $this->ipv4IspCityNodes) {
            $this->ipv4IspCityNodes->validate();
        }
        if (null !== $this->ipv6IspCityNodes) {
            $this->ipv6IspCityNodes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainIpv4IspCityNodes) {
            $res['DomainIpv4IspCityNodes'] = null !== $this->domainIpv4IspCityNodes ? $this->domainIpv4IspCityNodes->toArray($noStream) : $this->domainIpv4IspCityNodes;
        }

        if (null !== $this->domainIpv6IspCityNodes) {
            $res['DomainIpv6IspCityNodes'] = null !== $this->domainIpv6IspCityNodes ? $this->domainIpv6IspCityNodes->toArray($noStream) : $this->domainIpv6IspCityNodes;
        }

        if (null !== $this->ipv4IspCityNodes) {
            $res['Ipv4IspCityNodes'] = null !== $this->ipv4IspCityNodes ? $this->ipv4IspCityNodes->toArray($noStream) : $this->ipv4IspCityNodes;
        }

        if (null !== $this->ipv6IspCityNodes) {
            $res['Ipv6IspCityNodes'] = null !== $this->ipv6IspCityNodes ? $this->ipv6IspCityNodes->toArray($noStream) : $this->ipv6IspCityNodes;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DomainIpv4IspCityNodes'])) {
            $model->domainIpv4IspCityNodes = domainIpv4IspCityNodes::fromMap($map['DomainIpv4IspCityNodes']);
        }

        if (isset($map['DomainIpv6IspCityNodes'])) {
            $model->domainIpv6IspCityNodes = domainIpv6IspCityNodes::fromMap($map['DomainIpv6IspCityNodes']);
        }

        if (isset($map['Ipv4IspCityNodes'])) {
            $model->ipv4IspCityNodes = ipv4IspCityNodes::fromMap($map['Ipv4IspCityNodes']);
        }

        if (isset($map['Ipv6IspCityNodes'])) {
            $model->ipv6IspCityNodes = ipv6IspCityNodes::fromMap($map['Ipv6IspCityNodes']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
