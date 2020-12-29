<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainInfoResponseBody\recordLines;
use AlibabaCloud\Tea\Model;

class DescribeDomainInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $recordLineTreeJson;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var bool
     */
    public $inBlackHole;

    /**
     * @var bool
     */
    public $regionLines;

    /**
     * @var bool
     */
    public $slaveDns;

    /**
     * @var bool
     */
    public $aliDomain;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $punyCode;

    /**
     * @var string[]
     */
    public $dnsServers;

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
    public $versionCode;

    /**
     * @var recordLines[]
     */
    public $recordLines;

    /**
     * @var string
     */
    public $domainId;

    /**
     * @var string[]
     */
    public $availableTtls;

    /**
     * @var int
     */
    public $minTtl;

    /**
     * @var bool
     */
    public $inClean;

    /**
     * @var string
     */
    public $versionName;

    /**
     * @var string
     */
    public $lineType;
    protected $_name = [
        'recordLineTreeJson' => 'RecordLineTreeJson',
        'groupName'          => 'GroupName',
        'inBlackHole'        => 'InBlackHole',
        'regionLines'        => 'RegionLines',
        'slaveDns'           => 'SlaveDns',
        'aliDomain'          => 'AliDomain',
        'requestId'          => 'RequestId',
        'resourceGroupId'    => 'ResourceGroupId',
        'instanceId'         => 'InstanceId',
        'domainName'         => 'DomainName',
        'createTime'         => 'CreateTime',
        'punyCode'           => 'PunyCode',
        'dnsServers'         => 'DnsServers',
        'remark'             => 'Remark',
        'groupId'            => 'GroupId',
        'versionCode'        => 'VersionCode',
        'recordLines'        => 'RecordLines',
        'domainId'           => 'DomainId',
        'availableTtls'      => 'AvailableTtls',
        'minTtl'             => 'MinTtl',
        'inClean'            => 'InClean',
        'versionName'        => 'VersionName',
        'lineType'           => 'LineType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordLineTreeJson) {
            $res['RecordLineTreeJson'] = $this->recordLineTreeJson;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->inBlackHole) {
            $res['InBlackHole'] = $this->inBlackHole;
        }
        if (null !== $this->regionLines) {
            $res['RegionLines'] = $this->regionLines;
        }
        if (null !== $this->slaveDns) {
            $res['SlaveDns'] = $this->slaveDns;
        }
        if (null !== $this->aliDomain) {
            $res['AliDomain'] = $this->aliDomain;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->punyCode) {
            $res['PunyCode'] = $this->punyCode;
        }
        if (null !== $this->dnsServers) {
            $res['DnsServers'] = $this->dnsServers;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }
        if (null !== $this->recordLines) {
            $res['RecordLines'] = [];
            if (null !== $this->recordLines && \is_array($this->recordLines)) {
                $n = 0;
                foreach ($this->recordLines as $item) {
                    $res['RecordLines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->availableTtls) {
            $res['AvailableTtls'] = $this->availableTtls;
        }
        if (null !== $this->minTtl) {
            $res['MinTtl'] = $this->minTtl;
        }
        if (null !== $this->inClean) {
            $res['InClean'] = $this->inClean;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }
        if (null !== $this->lineType) {
            $res['LineType'] = $this->lineType;
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
        if (isset($map['RecordLineTreeJson'])) {
            $model->recordLineTreeJson = $map['RecordLineTreeJson'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['InBlackHole'])) {
            $model->inBlackHole = $map['InBlackHole'];
        }
        if (isset($map['RegionLines'])) {
            $model->regionLines = $map['RegionLines'];
        }
        if (isset($map['SlaveDns'])) {
            $model->slaveDns = $map['SlaveDns'];
        }
        if (isset($map['AliDomain'])) {
            $model->aliDomain = $map['AliDomain'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['PunyCode'])) {
            $model->punyCode = $map['PunyCode'];
        }
        if (isset($map['DnsServers'])) {
            if (!empty($map['DnsServers'])) {
                $model->dnsServers = $map['DnsServers'];
            }
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }
        if (isset($map['RecordLines'])) {
            if (!empty($map['RecordLines'])) {
                $model->recordLines = [];
                $n                  = 0;
                foreach ($map['RecordLines'] as $item) {
                    $model->recordLines[$n++] = null !== $item ? recordLines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['AvailableTtls'])) {
            if (!empty($map['AvailableTtls'])) {
                $model->availableTtls = $map['AvailableTtls'];
            }
        }
        if (isset($map['MinTtl'])) {
            $model->minTtl = $map['MinTtl'];
        }
        if (isset($map['InClean'])) {
            $model->inClean = $map['InClean'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }
        if (isset($map['LineType'])) {
            $model->lineType = $map['LineType'];
        }

        return $model;
    }
}
