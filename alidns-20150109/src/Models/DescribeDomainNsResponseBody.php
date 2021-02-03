<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainNsResponseBody\dnsServers;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainNsResponseBody\expectDnsServers;
use AlibabaCloud\Tea\Model;

class DescribeDomainNsResponseBody extends Model
{
    /**
     * @var bool
     */
    public $allAliDns;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var expectDnsServers
     */
    public $expectDnsServers;

    /**
     * @var dnsServers
     */
    public $dnsServers;

    /**
     * @var bool
     */
    public $includeAliDns;
    protected $_name = [
        'allAliDns'        => 'AllAliDns',
        'requestId'        => 'RequestId',
        'expectDnsServers' => 'ExpectDnsServers',
        'dnsServers'       => 'DnsServers',
        'includeAliDns'    => 'IncludeAliDns',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allAliDns) {
            $res['AllAliDns'] = $this->allAliDns;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->expectDnsServers) {
            $res['ExpectDnsServers'] = null !== $this->expectDnsServers ? $this->expectDnsServers->toMap() : null;
        }
        if (null !== $this->dnsServers) {
            $res['DnsServers'] = null !== $this->dnsServers ? $this->dnsServers->toMap() : null;
        }
        if (null !== $this->includeAliDns) {
            $res['IncludeAliDns'] = $this->includeAliDns;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainNsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllAliDns'])) {
            $model->allAliDns = $map['AllAliDns'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ExpectDnsServers'])) {
            $model->expectDnsServers = expectDnsServers::fromMap($map['ExpectDnsServers']);
        }
        if (isset($map['DnsServers'])) {
            $model->dnsServers = dnsServers::fromMap($map['DnsServers']);
        }
        if (isset($map['IncludeAliDns'])) {
            $model->includeAliDns = $map['IncludeAliDns'];
        }

        return $model;
    }
}
