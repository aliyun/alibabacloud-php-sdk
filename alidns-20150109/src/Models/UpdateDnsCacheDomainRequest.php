<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDnsCacheDomainRequest\sourceDnsServer;
use AlibabaCloud\Tea\Model;

class UpdateDnsCacheDomainRequest extends Model
{
    /**
     * @description The maximum TTL period of the cached data retrieved from the origin DNS server. Unit: seconds. Valid values: 30 to 86400.
     *
     * @example 86400
     *
     * @var int
     */
    public $cacheTtlMax;

    /**
     * @description The minimum time-to-live (TTL) period of the cached data retrieved from the origin Domain Name System (DNS) server. Unit: seconds. Valid values: 30 to 86400.
     *
     * @example 30
     *
     * @var int
     */
    public $cacheTtlMin;

    /**
     * @description The domain name.
     *
     * @example dns.example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The instance ID of the cache-accelerated domain name.
     *
     * @example dns-sg-l9u2ux1fw01
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The language.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The origin DNS servers. A maximum of 10 origin DNS servers are supported.
     *
     * @var sourceDnsServer[]
     */
    public $sourceDnsServer;

    /**
     * @description Specifies whether the origin DNS server supports Extension Mechanisms for DNS (EDNS). Valid values: NOT_SUPPORT and SUPPORT.
     *
     * @example SUPPORT
     *
     * @var string
     */
    public $sourceEdns;

    /**
     * @description The origin protocol policy. Valid values: TCP and UDP. Default value: UDP.
     *
     * @example UDP
     *
     * @var string
     */
    public $sourceProtocol;
    protected $_name = [
        'cacheTtlMax'     => 'CacheTtlMax',
        'cacheTtlMin'     => 'CacheTtlMin',
        'domainName'      => 'DomainName',
        'instanceId'      => 'InstanceId',
        'lang'            => 'Lang',
        'sourceDnsServer' => 'SourceDnsServer',
        'sourceEdns'      => 'SourceEdns',
        'sourceProtocol'  => 'SourceProtocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheTtlMax) {
            $res['CacheTtlMax'] = $this->cacheTtlMax;
        }
        if (null !== $this->cacheTtlMin) {
            $res['CacheTtlMin'] = $this->cacheTtlMin;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceDnsServer) {
            $res['SourceDnsServer'] = [];
            if (null !== $this->sourceDnsServer && \is_array($this->sourceDnsServer)) {
                $n = 0;
                foreach ($this->sourceDnsServer as $item) {
                    $res['SourceDnsServer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sourceEdns) {
            $res['SourceEdns'] = $this->sourceEdns;
        }
        if (null !== $this->sourceProtocol) {
            $res['SourceProtocol'] = $this->sourceProtocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDnsCacheDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheTtlMax'])) {
            $model->cacheTtlMax = $map['CacheTtlMax'];
        }
        if (isset($map['CacheTtlMin'])) {
            $model->cacheTtlMin = $map['CacheTtlMin'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceDnsServer'])) {
            if (!empty($map['SourceDnsServer'])) {
                $model->sourceDnsServer = [];
                $n                      = 0;
                foreach ($map['SourceDnsServer'] as $item) {
                    $model->sourceDnsServer[$n++] = null !== $item ? sourceDnsServer::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SourceEdns'])) {
            $model->sourceEdns = $map['SourceEdns'];
        }
        if (isset($map['SourceProtocol'])) {
            $model->sourceProtocol = $map['SourceProtocol'];
        }

        return $model;
    }
}
