<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainsResponse\domains;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainsResponse\domains\domain\dnsServers;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainsResponse\domains\domain\tags;
use AlibabaCloud\Tea\Model;

class domain extends Model
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
    public $punyCode;

    /**
     * @var bool
     */
    public $aliDomain;

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
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

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
    public $versionName;

    /**
     * @var string
     */
    public $instanceEndTime;

    /**
     * @var bool
     */
    public $instanceExpired;

    /**
     * @var bool
     */
    public $starmark;

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
    public $resourceGroupId;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var dnsServers
     */
    public $dnsServers;
    protected $_name = [
        'domainId'        => 'DomainId',
        'domainName'      => 'DomainName',
        'punyCode'        => 'PunyCode',
        'aliDomain'       => 'AliDomain',
        'recordCount'     => 'RecordCount',
        'registrantEmail' => 'RegistrantEmail',
        'remark'          => 'Remark',
        'groupId'         => 'GroupId',
        'groupName'       => 'GroupName',
        'instanceId'      => 'InstanceId',
        'versionCode'     => 'VersionCode',
        'versionName'     => 'VersionName',
        'instanceEndTime' => 'InstanceEndTime',
        'instanceExpired' => 'InstanceExpired',
        'starmark'        => 'Starmark',
        'createTime'      => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'resourceGroupId' => 'ResourceGroupId',
        'tags'            => 'Tags',
        'dnsServers'      => 'DnsServers',
    ];

    public function validate()
    {
        Model::validateRequired('domainId', $this->domainId, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('punyCode', $this->punyCode, true);
        Model::validateRequired('aliDomain', $this->aliDomain, true);
        Model::validateRequired('recordCount', $this->recordCount, true);
        Model::validateRequired('registrantEmail', $this->registrantEmail, true);
        Model::validateRequired('remark', $this->remark, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('versionCode', $this->versionCode, true);
        Model::validateRequired('versionName', $this->versionName, true);
        Model::validateRequired('instanceEndTime', $this->instanceEndTime, true);
        Model::validateRequired('instanceExpired', $this->instanceExpired, true);
        Model::validateRequired('starmark', $this->starmark, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('createTimestamp', $this->createTimestamp, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('dnsServers', $this->dnsServers, true);
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
        if (null !== $this->punyCode) {
            $res['PunyCode'] = $this->punyCode;
        }
        if (null !== $this->aliDomain) {
            $res['AliDomain'] = $this->aliDomain;
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
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }
        if (null !== $this->instanceEndTime) {
            $res['InstanceEndTime'] = $this->instanceEndTime;
        }
        if (null !== $this->instanceExpired) {
            $res['InstanceExpired'] = $this->instanceExpired;
        }
        if (null !== $this->starmark) {
            $res['Starmark'] = $this->starmark;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->dnsServers) {
            $res['DnsServers'] = null !== $this->dnsServers ? $this->dnsServers->toMap() : null;
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
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['PunyCode'])) {
            $model->punyCode = $map['PunyCode'];
        }
        if (isset($map['AliDomain'])) {
            $model->aliDomain = $map['AliDomain'];
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }
        if (isset($map['InstanceEndTime'])) {
            $model->instanceEndTime = $map['InstanceEndTime'];
        }
        if (isset($map['InstanceExpired'])) {
            $model->instanceExpired = $map['InstanceExpired'];
        }
        if (isset($map['Starmark'])) {
            $model->starmark = $map['Starmark'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['DnsServers'])) {
            $model->dnsServers = dnsServers::fromMap($map['DnsServers']);
        }

        return $model;
    }
}
