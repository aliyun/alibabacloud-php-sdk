<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponse\domainIpv4IspCityNodes;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponse\domainIpv6IspCityNodes;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponse\ipv4IspCityNodes;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponse\ipv6IspCityNodes;
use AlibabaCloud\Tea\Model;

class DescribeDnsGtmMonitorAvailableConfigResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ipv4IspCityNodes
     */
    public $ipv4IspCityNodes;

    /**
     * @var ipv6IspCityNodes
     */
    public $ipv6IspCityNodes;

    /**
     * @var domainIpv4IspCityNodes
     */
    public $domainIpv4IspCityNodes;

    /**
     * @var domainIpv6IspCityNodes
     */
    public $domainIpv6IspCityNodes;
    protected $_name = [
        'requestId'              => 'RequestId',
        'ipv4IspCityNodes'       => 'Ipv4IspCityNodes',
        'ipv6IspCityNodes'       => 'Ipv6IspCityNodes',
        'domainIpv4IspCityNodes' => 'DomainIpv4IspCityNodes',
        'domainIpv6IspCityNodes' => 'DomainIpv6IspCityNodes',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('ipv4IspCityNodes', $this->ipv4IspCityNodes, true);
        Model::validateRequired('ipv6IspCityNodes', $this->ipv6IspCityNodes, true);
        Model::validateRequired('domainIpv4IspCityNodes', $this->domainIpv4IspCityNodes, true);
        Model::validateRequired('domainIpv6IspCityNodes', $this->domainIpv6IspCityNodes, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ipv4IspCityNodes) {
            $res['Ipv4IspCityNodes'] = null !== $this->ipv4IspCityNodes ? $this->ipv4IspCityNodes->toMap() : null;
        }
        if (null !== $this->ipv6IspCityNodes) {
            $res['Ipv6IspCityNodes'] = null !== $this->ipv6IspCityNodes ? $this->ipv6IspCityNodes->toMap() : null;
        }
        if (null !== $this->domainIpv4IspCityNodes) {
            $res['DomainIpv4IspCityNodes'] = null !== $this->domainIpv4IspCityNodes ? $this->domainIpv4IspCityNodes->toMap() : null;
        }
        if (null !== $this->domainIpv6IspCityNodes) {
            $res['DomainIpv6IspCityNodes'] = null !== $this->domainIpv6IspCityNodes ? $this->domainIpv6IspCityNodes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDnsGtmMonitorAvailableConfigResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Ipv4IspCityNodes'])) {
            $model->ipv4IspCityNodes = ipv4IspCityNodes::fromMap($map['Ipv4IspCityNodes']);
        }
        if (isset($map['Ipv6IspCityNodes'])) {
            $model->ipv6IspCityNodes = ipv6IspCityNodes::fromMap($map['Ipv6IspCityNodes']);
        }
        if (isset($map['DomainIpv4IspCityNodes'])) {
            $model->domainIpv4IspCityNodes = domainIpv4IspCityNodes::fromMap($map['DomainIpv4IspCityNodes']);
        }
        if (isset($map['DomainIpv6IspCityNodes'])) {
            $model->domainIpv6IspCityNodes = domainIpv6IspCityNodes::fromMap($map['DomainIpv6IspCityNodes']);
        }

        return $model;
    }
}
