<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsCacheDomainsResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsCacheDomainsResponseBody\domains\sourceDnsServers;
use AlibabaCloud\Tea\Model;

class domains extends Model
{
    /**
     * @var string
     */
    public $sourceProtocol;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $sourceEdns;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainId;

    /**
     * @var int
     */
    public $updateTimestamp;

    /**
     * @var int
     */
    public $expireTimestamp;

    /**
     * @var int
     */
    public $cacheTtlMax;

    /**
     * @var int
     */
    public $cacheTtlMin;

    /**
     * @var string
     */
    public $versionCode;

    /**
     * @var sourceDnsServers[]
     */
    public $sourceDnsServers;

    /**
     * @var int
     */
    public $createTimestamp;
    protected $_name = [
        'sourceProtocol'   => 'SourceProtocol',
        'updateTime'       => 'UpdateTime',
        'remark'           => 'Remark',
        'expireTime'       => 'ExpireTime',
        'createTime'       => 'CreateTime',
        'instanceId'       => 'InstanceId',
        'sourceEdns'       => 'SourceEdns',
        'domainName'       => 'DomainName',
        'domainId'         => 'DomainId',
        'updateTimestamp'  => 'UpdateTimestamp',
        'expireTimestamp'  => 'ExpireTimestamp',
        'cacheTtlMax'      => 'CacheTtlMax',
        'cacheTtlMin'      => 'CacheTtlMin',
        'versionCode'      => 'VersionCode',
        'sourceDnsServers' => 'SourceDnsServers',
        'createTimestamp'  => 'CreateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceProtocol) {
            $res['SourceProtocol'] = $this->sourceProtocol;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->sourceEdns) {
            $res['SourceEdns'] = $this->sourceEdns;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }
        if (null !== $this->expireTimestamp) {
            $res['ExpireTimestamp'] = $this->expireTimestamp;
        }
        if (null !== $this->cacheTtlMax) {
            $res['CacheTtlMax'] = $this->cacheTtlMax;
        }
        if (null !== $this->cacheTtlMin) {
            $res['CacheTtlMin'] = $this->cacheTtlMin;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
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
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
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
        if (isset($map['SourceProtocol'])) {
            $model->sourceProtocol = $map['SourceProtocol'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SourceEdns'])) {
            $model->sourceEdns = $map['SourceEdns'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }
        if (isset($map['ExpireTimestamp'])) {
            $model->expireTimestamp = $map['ExpireTimestamp'];
        }
        if (isset($map['CacheTtlMax'])) {
            $model->cacheTtlMax = $map['CacheTtlMax'];
        }
        if (isset($map['CacheTtlMin'])) {
            $model->cacheTtlMin = $map['CacheTtlMin'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
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
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        return $model;
    }
}
