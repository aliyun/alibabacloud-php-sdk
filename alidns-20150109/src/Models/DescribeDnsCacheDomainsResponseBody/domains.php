<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsCacheDomainsResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsCacheDomainsResponseBody\domains\sourceDnsServers;
use AlibabaCloud\Tea\Model;

class domains extends Model
{
    /**
     * @example 86400
     *
     * @var int
     */
    public $cacheTtlMax;

    /**
     * @example 30
     *
     * @var int
     */
    public $cacheTtlMin;

    /**
     * @example 2022-10-17T06:13Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1660546144000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @example 00efd71a-770e-4255-b54e-6fe5659baffe
     *
     * @var string
     */
    public $domainId;

    /**
     * @example dns-example.top
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 2022-12-02T16:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example 1692374400000
     *
     * @var int
     */
    public $expireTimestamp;

    /**
     * @example i-7bg
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example remark
     *
     * @var string
     */
    public $remark;

    /**
     * @var sourceDnsServers[]
     */
    public $sourceDnsServers;

    /**
     * @example SUPPORT
     *
     * @var string
     */
    public $sourceEdns;

    /**
     * @example UDP
     *
     * @var string
     */
    public $sourceProtocol;

    /**
     * @example 2023-05-22T03:40Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 1671690491000
     *
     * @var int
     */
    public $updateTimestamp;

    /**
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
