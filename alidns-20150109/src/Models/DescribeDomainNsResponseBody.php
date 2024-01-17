<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainNsResponseBody\dnsServers;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainNsResponseBody\expectDnsServers;
use AlibabaCloud\Tea\Model;

class DescribeDomainNsResponseBody extends Model
{
    /**
     * @description Indicates whether all the name servers are Alibaba Cloud DNS servers.
     *
     * @example true
     *
     * @var bool
     */
    public $allAliDns;

    /**
     * @description The cause code of the detection failure.
     *
     * @example DnsCheck.Failed
     *
     * @var string
     */
    public $detectFailedReasonCode;

    /**
     * @description The DNS server names configured for the domain name.
     *
     * @var dnsServers
     */
    public $dnsServers;

    /**
     * @description The Domain Name System (DNS) server names assigned by Alibaba Cloud DNS.
     *
     * @var expectDnsServers
     */
    public $expectDnsServers;

    /**
     * @description Indicates whether the name servers include Alibaba Cloud DNS servers.
     *
     * @example true
     *
     * @var bool
     */
    public $includeAliDns;

    /**
     * @description The request ID.
     *
     * @example 16C7DC7A-2FA7-4D14-8B12-88A2BB6373DB
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'allAliDns'              => 'AllAliDns',
        'detectFailedReasonCode' => 'DetectFailedReasonCode',
        'dnsServers'             => 'DnsServers',
        'expectDnsServers'       => 'ExpectDnsServers',
        'includeAliDns'          => 'IncludeAliDns',
        'requestId'              => 'RequestId',
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
        if (null !== $this->detectFailedReasonCode) {
            $res['DetectFailedReasonCode'] = $this->detectFailedReasonCode;
        }
        if (null !== $this->dnsServers) {
            $res['DnsServers'] = null !== $this->dnsServers ? $this->dnsServers->toMap() : null;
        }
        if (null !== $this->expectDnsServers) {
            $res['ExpectDnsServers'] = null !== $this->expectDnsServers ? $this->expectDnsServers->toMap() : null;
        }
        if (null !== $this->includeAliDns) {
            $res['IncludeAliDns'] = $this->includeAliDns;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DetectFailedReasonCode'])) {
            $model->detectFailedReasonCode = $map['DetectFailedReasonCode'];
        }
        if (isset($map['DnsServers'])) {
            $model->dnsServers = dnsServers::fromMap($map['DnsServers']);
        }
        if (isset($map['ExpectDnsServers'])) {
            $model->expectDnsServers = expectDnsServers::fromMap($map['ExpectDnsServers']);
        }
        if (isset($map['IncludeAliDns'])) {
            $model->includeAliDns = $map['IncludeAliDns'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
