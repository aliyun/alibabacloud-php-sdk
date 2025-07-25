<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainInfoResponseBody\availableTtls;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainInfoResponseBody\dnsServers;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainInfoResponseBody\recordLines;
use AlibabaCloud\Tea\Model;

class DescribeDomainInfoResponseBody extends Model
{
    /**
     * @description Indicates whether the domain name was registered in Alibaba Cloud.
     *
     * @example true
     *
     * @var bool
     */
    public $aliDomain;

    /**
     * @description The available time to live (TTL) values that can be configured for the domain name. Available TTL values are not returned by default. If you want to query such information, set NeedDetailAttributes to true.
     *
     * @var availableTtls
     */
    public $availableTtls;

    /**
     * @description The time when the domain name was created.
     *
     * @example 2015-12-12T09:23Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The DNS servers that are used to resolve the domain name.
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
     * @description Indicates whether the DNS traffic analysis feature is enabled. Valid values:
     *
     * @var string
     */
    public $domainLoggingSwitchStatus;

    /**
     * @description The domain name.
     *
     * @example example.com
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
     * @description Indicates whether blackhole filtering was triggered.
     *
     * @example false
     *
     * @var bool
     */
    public $inBlackHole;

    /**
     * @description Indicates whether traffic scrubbing was in progress.
     *
     * @example false
     *
     * @var bool
     */
    public $inClean;

    /**
     * @description The ID of the Alibaba Cloud DNS instance.
     *
     * @example i-7bg
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the DNS request line.
     *
     * @example region_province
     *
     * @var string
     */
    public $lineType;

    /**
     * @description The minimum TTL value.
     *
     * @example 1
     *
     * @var int
     */
    public $minTtl;

    /**
     * @description The Punycode for the domain name. This parameter is returned only for Chinese domain names.
     *
     * @example example.com
     *
     * @var string
     */
    public $punyCode;

    /**
     * @description The tree-structure DNS request lines.
     *
     * @example {"default":{},"unicom":{},"telecom":{},"mobile":{},"edu":{},"oversea":{},"baidu":{},"biying":{},"google":{}}
     *
     * @var string
     */
    public $recordLineTreeJson;

    /**
     * @description The DNS request lines.
     *
     * @var recordLines
     */
    public $recordLines;

    /**
     * @description Indicates whether the DNS request lines are regional lines.
     *
     * @example false
     *
     * @var bool
     */
    public $regionLines;

    /**
     * @description The description.
     *
     * @example remark
     *
     * @var string
     */
    public $remark;

    /**
     * @description The request ID.
     *
     * @example 536E9CAD-DB30-4647-AC87-AA5CC38C5382
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aek3dj3wvclgcxo
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Indicates whether secondary DNS is supported.
     *
     * @example true
     *
     * @var bool
     */
    public $slaveDns;

    /**
     * @description Indicates whether the queried domain name is a hosted subdomain name. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $subDomain;

    /**
     * @description The version ID of Alibaba Cloud DNS.
     *
     * @example version1
     *
     * @var string
     */
    public $versionCode;

    /**
     * @description The edition of Alibaba Cloud DNS.
     *
     * @var string
     */
    public $versionName;
    protected $_name = [
        'aliDomain' => 'AliDomain',
        'availableTtls' => 'AvailableTtls',
        'createTime' => 'CreateTime',
        'dnsServers' => 'DnsServers',
        'domainId' => 'DomainId',
        'domainLoggingSwitchStatus' => 'DomainLoggingSwitchStatus',
        'domainName' => 'DomainName',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'inBlackHole' => 'InBlackHole',
        'inClean' => 'InClean',
        'instanceId' => 'InstanceId',
        'lineType' => 'LineType',
        'minTtl' => 'MinTtl',
        'punyCode' => 'PunyCode',
        'recordLineTreeJson' => 'RecordLineTreeJson',
        'recordLines' => 'RecordLines',
        'regionLines' => 'RegionLines',
        'remark' => 'Remark',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'slaveDns' => 'SlaveDns',
        'subDomain' => 'SubDomain',
        'versionCode' => 'VersionCode',
        'versionName' => 'VersionName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliDomain) {
            $res['AliDomain'] = $this->aliDomain;
        }
        if (null !== $this->availableTtls) {
            $res['AvailableTtls'] = null !== $this->availableTtls ? $this->availableTtls->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->inBlackHole) {
            $res['InBlackHole'] = $this->inBlackHole;
        }
        if (null !== $this->inClean) {
            $res['InClean'] = $this->inClean;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lineType) {
            $res['LineType'] = $this->lineType;
        }
        if (null !== $this->minTtl) {
            $res['MinTtl'] = $this->minTtl;
        }
        if (null !== $this->punyCode) {
            $res['PunyCode'] = $this->punyCode;
        }
        if (null !== $this->recordLineTreeJson) {
            $res['RecordLineTreeJson'] = $this->recordLineTreeJson;
        }
        if (null !== $this->recordLines) {
            $res['RecordLines'] = null !== $this->recordLines ? $this->recordLines->toMap() : null;
        }
        if (null !== $this->regionLines) {
            $res['RegionLines'] = $this->regionLines;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->slaveDns) {
            $res['SlaveDns'] = $this->slaveDns;
        }
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
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
     * @return DescribeDomainInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliDomain'])) {
            $model->aliDomain = $map['AliDomain'];
        }
        if (isset($map['AvailableTtls'])) {
            $model->availableTtls = availableTtls::fromMap($map['AvailableTtls']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['InBlackHole'])) {
            $model->inBlackHole = $map['InBlackHole'];
        }
        if (isset($map['InClean'])) {
            $model->inClean = $map['InClean'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LineType'])) {
            $model->lineType = $map['LineType'];
        }
        if (isset($map['MinTtl'])) {
            $model->minTtl = $map['MinTtl'];
        }
        if (isset($map['PunyCode'])) {
            $model->punyCode = $map['PunyCode'];
        }
        if (isset($map['RecordLineTreeJson'])) {
            $model->recordLineTreeJson = $map['RecordLineTreeJson'];
        }
        if (isset($map['RecordLines'])) {
            $model->recordLines = recordLines::fromMap($map['RecordLines']);
        }
        if (isset($map['RegionLines'])) {
            $model->regionLines = $map['RegionLines'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SlaveDns'])) {
            $model->slaveDns = $map['SlaveDns'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
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
