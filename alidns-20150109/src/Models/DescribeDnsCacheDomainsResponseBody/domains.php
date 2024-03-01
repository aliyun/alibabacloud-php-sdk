<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsCacheDomainsResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsCacheDomainsResponseBody\domains\sourceDnsServers;
use AlibabaCloud\Tea\Model;

class domains extends Model
{
    /**
     * @description The maximum time-to-live (TTL) period of the cached data retrieved from the origin DNS server. Unit: seconds. Valid values: 30 to 86400.
     *
     * @example 86400
     *
     * @var int
     */
    public $cacheTtlMax;

    /**
     * @description The minimum TTL period of the cached data retrieved from the origin DNS server. Unit: seconds. Valid values: 30 to 86400.
     *
     * @example 30
     *
     * @var int
     */
    public $cacheTtlMin;

    /**
     * @description The time when the domain name was added. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2022-10-17T06:13Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the domain name was added. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1660546144000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The ID of the cache-accelerated domain name.
     *
     * @example 00efd71a-770e-4255-b54e-6fe5659baffe
     *
     * @var string
     */
    public $domainId;

    /**
     * @description The cache-accelerated domain name.
     *
     * @example dns-example.top
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The time when the instance expires. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2022-12-02T16:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The time when the instance expires. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1692374400000
     *
     * @var int
     */
    public $expireTimestamp;

    /**
     * @description The instance ID of the cache-accelerated domain name.
     *
     * @example i-7bg
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The description of the domain name.
     *
     * @example remark
     *
     * @var string
     */
    public $remark;

    /**
     * @description The origin DNS servers.
     *
     * @var sourceDnsServers[]
     */
    public $sourceDnsServers;

    /**
     * @description Specifies whether the origin Domain Name System (DNS) server supports Extension Mechanisms for DNS (EDNS). Valid values: NOT_SUPPORT and SUPPORT.
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

    /**
     * @description The time when the configurations of the domain name were updated. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2023-05-22T03:40Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The time when the configurations of the domain name were updated. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1671690491000
     *
     * @var int
     */
    public $updateTimestamp;

    /**
     * @description The edition code of Alibaba Cloud DNS.
     *
     * @example ultimate
     *
     * @var string
     */
    public $versionCode;
    protected $_name = [
        'cacheTtlMax'      => 'CacheTtlMax',
        'cacheTtlMin'      => 'CacheTtlMin',
        'createTime'       => 'CreateTime',
        'createTimestamp'  => 'CreateTimestamp',
        'domainId'         => 'DomainId',
        'domainName'       => 'DomainName',
        'expireTime'       => 'ExpireTime',
        'expireTimestamp'  => 'ExpireTimestamp',
        'instanceId'       => 'InstanceId',
        'remark'           => 'Remark',
        'sourceDnsServers' => 'SourceDnsServers',
        'sourceEdns'       => 'SourceEdns',
        'sourceProtocol'   => 'SourceProtocol',
        'updateTime'       => 'UpdateTime',
        'updateTimestamp'  => 'UpdateTimestamp',
        'versionCode'      => 'VersionCode',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->expireTimestamp) {
            $res['ExpireTimestamp'] = $this->expireTimestamp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->sourceDnsServers) {
            $res['SourceDnsServers'] = [];
            if (null !== $this->sourceDnsServers && \is_array($this->sourceDnsServers)) {
                $n = 0;
                foreach ($this->sourceDnsServers as $item) {
                    $res['SourceDnsServers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sourceEdns) {
            $res['SourceEdns'] = $this->sourceEdns;
        }
        if (null !== $this->sourceProtocol) {
            $res['SourceProtocol'] = $this->sourceProtocol;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domains
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ExpireTimestamp'])) {
            $model->expireTimestamp = $map['ExpireTimestamp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SourceDnsServers'])) {
            if (!empty($map['SourceDnsServers'])) {
                $model->sourceDnsServers = [];
                $n                       = 0;
                foreach ($map['SourceDnsServers'] as $item) {
                    $model->sourceDnsServers[$n++] = null !== $item ? sourceDnsServers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SourceEdns'])) {
            $model->sourceEdns = $map['SourceEdns'];
        }
        if (isset($map['SourceProtocol'])) {
            $model->sourceProtocol = $map['SourceProtocol'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }

        return $model;
    }
}
