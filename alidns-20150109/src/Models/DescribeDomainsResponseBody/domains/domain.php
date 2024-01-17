<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainsResponseBody\domains;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainsResponseBody\domains\domain\dnsServers;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainsResponseBody\domains\domain\tags;
use AlibabaCloud\Tea\Model;

class domain extends Model
{
    /**
     * @description Indicates whether the domain name is an Alibaba Cloud HiChina domain name.
     *
     * @example true
     *
     * @var bool
     */
    public $aliDomain;

    /**
     * @example 2019-01-30T05:25Z
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
     * @description The list of DNS servers of the domain name in the DNS system.
     *
     * @var dnsServers
     */
    public $dnsServers;

    /**
     * @description The ID of the domain name.
     *
     * @example 00efd71a-770e-4255-b54e-6fe5659baffe
     *
     * @var string
     */
    public $domainId;

    /**
     * @var string
     */
    public $domainLoggingSwitchStatus;

    /**
     * @description The domain name.
     *
     * @example abc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The ID of the domain name group.
     *
     * @example 2223
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the domain name group.
     *
     * @example mygroup
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The expiration time of the instance.
     *
     * @example 2020-03-14T16:00Z
     *
     * @var string
     */
    public $instanceEndTime;

    /**
     * @description Indicates whether the instance expired.
     *
     * @example false
     *
     * @var bool
     */
    public $instanceExpired;

    /**
     * @description The ID of the Alibaba Cloud DNS instance.
     *
     * @example i-7bg
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The punycode is returned for Chinese domain names and is left blank for English domain names.
     *
     * @example abc.com
     *
     * @var string
     */
    public $punyCode;

    /**
     * @description The number of DNS records of the domain name.
     *
     * @example 100
     *
     * @var int
     */
    public $recordCount;

    /**
     * @description The email address of the registrant.
     *
     * @example test@example.com
     *
     * @var string
     */
    public $registrantEmail;

    /**
     * @description The description.
     *
     * @example remark
     *
     * @var string
     */
    public $remark;

    /**
     * @example rg-acf
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Indicates whether to query the starmark of the domain name.
     *
     * @example true
     *
     * @var bool
     */
    public $starmark;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @description The version code of the Alibaba Cloud DNS instance.
     *
     * @example version_enterprise_basic
     *
     * @var string
     */
    public $versionCode;

    /**
     * @description The version name of the Alibaba Cloud DNS instance.
     *
     * @var string
     */
    public $versionName;
    protected $_name = [
        'aliDomain'                 => 'AliDomain',
        'createTime'                => 'CreateTime',
        'createTimestamp'           => 'CreateTimestamp',
        'dnsServers'                => 'DnsServers',
        'domainId'                  => 'DomainId',
        'domainLoggingSwitchStatus' => 'DomainLoggingSwitchStatus',
        'domainName'                => 'DomainName',
        'groupId'                   => 'GroupId',
        'groupName'                 => 'GroupName',
        'instanceEndTime'           => 'InstanceEndTime',
        'instanceExpired'           => 'InstanceExpired',
        'instanceId'                => 'InstanceId',
        'punyCode'                  => 'PunyCode',
        'recordCount'               => 'RecordCount',
        'registrantEmail'           => 'RegistrantEmail',
        'remark'                    => 'Remark',
        'resourceGroupId'           => 'ResourceGroupId',
        'starmark'                  => 'Starmark',
        'tags'                      => 'Tags',
        'versionCode'               => 'VersionCode',
        'versionName'               => 'VersionName',
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
        if (null !== $this->domainLoggingSwitchStatus) {
            $res['DomainLoggingSwitchStatus'] = $this->domainLoggingSwitchStatus;
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
        if (isset($map['DomainLoggingSwitchStatus'])) {
            $model->domainLoggingSwitchStatus = $map['DomainLoggingSwitchStatus'];
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
