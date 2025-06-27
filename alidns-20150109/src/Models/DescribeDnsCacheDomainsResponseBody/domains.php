<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsCacheDomainsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsCacheDomainsResponseBody\domains\sourceDnsServers;

class domains extends Model
{
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
    public $createTime;

    /**
     * @var int
     */
    public $createTimestamp;

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
    public $expireTime;

    /**
     * @var int
     */
    public $expireTimestamp;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var sourceDnsServers[]
     */
    public $sourceDnsServers;

    /**
     * @var string
     */
    public $sourceEdns;

    /**
     * @var string
     */
    public $sourceProtocol;

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
    public $versionCode;
    protected $_name = [
        'cacheTtlMax' => 'CacheTtlMax',
        'cacheTtlMin' => 'CacheTtlMin',
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'domainId' => 'DomainId',
        'domainName' => 'DomainName',
        'expireTime' => 'ExpireTime',
        'expireTimestamp' => 'ExpireTimestamp',
        'instanceId' => 'InstanceId',
        'remark' => 'Remark',
        'sourceDnsServers' => 'SourceDnsServers',
        'sourceEdns' => 'SourceEdns',
        'sourceProtocol' => 'SourceProtocol',
        'updateTime' => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
        'versionCode' => 'VersionCode',
    ];

    public function validate()
    {
        if (\is_array($this->sourceDnsServers)) {
            Model::validateArray($this->sourceDnsServers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->sourceDnsServers)) {
                $res['SourceDnsServers'] = [];
                $n1 = 0;
                foreach ($this->sourceDnsServers as $item1) {
                    $res['SourceDnsServers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['SourceDnsServers'] as $item1) {
                    $model->sourceDnsServers[$n1] = sourceDnsServers::fromMap($item1);
                    ++$n1;
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
