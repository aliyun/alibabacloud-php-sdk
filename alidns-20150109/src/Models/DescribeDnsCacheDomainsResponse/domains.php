<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsCacheDomainsResponse;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsCacheDomainsResponse\domains\sourceDnsServers;
use AlibabaCloud\Tea\Model;

class domains extends Model
{
    /**
     * @var string
     */
    public $domainId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $versionCode;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $updateTimestamp;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var int
     */
    public $cacheTtlMin;

    /**
     * @var int
     */
    public $cacheTtlMax;

    /**
     * @var string
     */
    public $sourceProtocol;

    /**
     * @var string
     */
    public $sourceEdns;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var int
     */
    public $expireTimestamp;

    /**
     * @var sourceDnsServers[]
     */
    public $sourceDnsServers;
    protected $_name = [
        'domainId'         => 'DomainId',
        'domainName'       => 'DomainName',
        'instanceId'       => 'InstanceId',
        'versionCode'      => 'VersionCode',
        'remark'           => 'Remark',
        'updateTime'       => 'UpdateTime',
        'updateTimestamp'  => 'UpdateTimestamp',
        'createTime'       => 'CreateTime',
        'createTimestamp'  => 'CreateTimestamp',
        'cacheTtlMin'      => 'CacheTtlMin',
        'cacheTtlMax'      => 'CacheTtlMax',
        'sourceProtocol'   => 'SourceProtocol',
        'sourceEdns'       => 'SourceEdns',
        'expireTime'       => 'ExpireTime',
        'expireTimestamp'  => 'ExpireTimestamp',
        'sourceDnsServers' => 'SourceDnsServers',
    ];

    public function validate()
    {
        Model::validateRequired('domainId', $this->domainId, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('versionCode', $this->versionCode, true);
        Model::validateRequired('remark', $this->remark, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('updateTimestamp', $this->updateTimestamp, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('createTimestamp', $this->createTimestamp, true);
        Model::validateRequired('cacheTtlMin', $this->cacheTtlMin, true);
        Model::validateRequired('cacheTtlMax', $this->cacheTtlMax, true);
        Model::validateRequired('sourceProtocol', $this->sourceProtocol, true);
        Model::validateRequired('sourceEdns', $this->sourceEdns, true);
        Model::validateRequired('expireTime', $this->expireTime, true);
        Model::validateRequired('expireTimestamp', $this->expireTimestamp, true);
        Model::validateRequired('sourceDnsServers', $this->sourceDnsServers, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->cacheTtlMin) {
            $res['CacheTtlMin'] = $this->cacheTtlMin;
        }
        if (null !== $this->cacheTtlMax) {
            $res['CacheTtlMax'] = $this->cacheTtlMax;
        }
        if (null !== $this->sourceProtocol) {
            $res['SourceProtocol'] = $this->sourceProtocol;
        }
        if (null !== $this->sourceEdns) {
            $res['SourceEdns'] = $this->sourceEdns;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->expireTimestamp) {
            $res['ExpireTimestamp'] = $this->expireTimestamp;
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
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['CacheTtlMin'])) {
            $model->cacheTtlMin = $map['CacheTtlMin'];
        }
        if (isset($map['CacheTtlMax'])) {
            $model->cacheTtlMax = $map['CacheTtlMax'];
        }
        if (isset($map['SourceProtocol'])) {
            $model->sourceProtocol = $map['SourceProtocol'];
        }
        if (isset($map['SourceEdns'])) {
            $model->sourceEdns = $map['SourceEdns'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ExpireTimestamp'])) {
            $model->expireTimestamp = $map['ExpireTimestamp'];
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

        return $model;
    }
}
