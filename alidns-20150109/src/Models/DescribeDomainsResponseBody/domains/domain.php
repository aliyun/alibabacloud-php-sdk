<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainsResponseBody\domains;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainsResponseBody\domains\domain\dnsServers;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainsResponseBody\domains\domain\tags;
use AlibabaCloud\Tea\Model;

class domain extends Model
{
    /**
     * @var bool
     */
    public $aliDomain;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var dnsServers
     */
    public $dnsServers;

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
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $instanceEndTime;

    /**
     * @var bool
     */
    public $instanceExpired;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $punyCode;

    /**
     * @var int
     */
    public $recordCount;

    /**
     * @var string
     */
    public $registrantEmail;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $starmark;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $versionCode;

    /**
     * @var string
     */
    public $versionName;
    protected $_name = [
        'aliDomain'       => 'AliDomain',
        'createTime'      => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'dnsServers'      => 'DnsServers',
        'domainId'        => 'DomainId',
        'domainName'      => 'DomainName',
        'groupId'         => 'GroupId',
        'groupName'       => 'GroupName',
        'instanceEndTime' => 'InstanceEndTime',
        'instanceExpired' => 'InstanceExpired',
        'instanceId'      => 'InstanceId',
        'punyCode'        => 'PunyCode',
        'recordCount'     => 'RecordCount',
        'registrantEmail' => 'RegistrantEmail',
        'remark'          => 'Remark',
        'resourceGroupId' => 'ResourceGroupId',
        'starmark'        => 'Starmark',
        'tags'            => 'Tags',
        'versionCode'     => 'VersionCode',
        'versionName'     => 'VersionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliDomain) {
            $res['AliDomain'] = $this->aliDomain;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->dnsServers) {
            $res['DnsServers'] = null !== $this->dnsServers ? $this->dnsServers->toMap() : null;
        }
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->instanceEndTime) {
            $res['InstanceEndTime'] = $this->instanceEndTime;
        }
        if (null !== $this->instanceExpired) {
            $res['InstanceExpired'] = $this->instanceExpired;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->punyCode) {
            $res['PunyCode'] = $this->punyCode;
        }
        if (null !== $this->recordCount) {
            $res['RecordCount'] = $this->recordCount;
        }
        if (null !== $this->registrantEmail) {
            $res['RegistrantEmail'] = $this->registrantEmail;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->starmark) {
            $res['Starmark'] = $this->starmark;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domain
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliDomain'])) {
            $model->aliDomain = $map['AliDomain'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['DnsServers'])) {
            $model->dnsServers = dnsServers::fromMap($map['DnsServers']);
        }
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['InstanceEndTime'])) {
            $model->instanceEndTime = $map['InstanceEndTime'];
        }
        if (isset($map['InstanceExpired'])) {
            $model->instanceExpired = $map['InstanceExpired'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PunyCode'])) {
            $model->punyCode = $map['PunyCode'];
        }
        if (isset($map['RecordCount'])) {
            $model->recordCount = $map['RecordCount'];
        }
        if (isset($map['RegistrantEmail'])) {
            $model->registrantEmail = $map['RegistrantEmail'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Starmark'])) {
            $model->starmark = $map['Starmark'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
