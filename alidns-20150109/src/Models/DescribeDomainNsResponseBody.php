<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainNsResponseBody\dnsServers;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainNsResponseBody\expectDnsServers;

class DescribeDomainNsResponseBody extends Model
{
    /**
     * @var bool
     */
    public $allAliDns;
    /**
     * @var string
     */
    public $detectFailedReasonCode;
    /**
     * @var dnsServers
     */
    public $dnsServers;
    /**
     * @var expectDnsServers
     */
    public $expectDnsServers;
    /**
     * @var bool
     */
    public $includeAliDns;
    /**
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
        if (null !== $this->dnsServers) {
            $this->dnsServers->validate();
        }
        if (null !== $this->expectDnsServers) {
            $this->expectDnsServers->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allAliDns) {
            $res['AllAliDns'] = $this->allAliDns;
        }

        if (null !== $this->detectFailedReasonCode) {
            $res['DetectFailedReasonCode'] = $this->detectFailedReasonCode;
        }

        if (null !== $this->dnsServers) {
            $res['DnsServers'] = null !== $this->dnsServers ? $this->dnsServers->toArray($noStream) : $this->dnsServers;
        }

        if (null !== $this->expectDnsServers) {
            $res['ExpectDnsServers'] = null !== $this->expectDnsServers ? $this->expectDnsServers->toArray($noStream) : $this->expectDnsServers;
        }

        if (null !== $this->includeAliDns) {
            $res['IncludeAliDns'] = $this->includeAliDns;
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
