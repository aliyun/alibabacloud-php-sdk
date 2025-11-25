<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZonesResponseBody\zones;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZonesResponseBody\zones\zone\resourceTags;

class zone extends Model
{
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
    public $creator;

    /**
     * @var string
     */
    public $creatorSubType;

    /**
     * @var string
     */
    public $dnsGroup;

    /**
     * @var bool
     */
    public $dnsGroupChanging;

    /**
     * @var bool
     */
    public $isPtr;

    /**
     * @var string
     */
    public $proxyPattern;

    /**
     * @var int
     */
    public $recordCount;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var resourceTags
     */
    public $resourceTags;

    /**
     * @var string
     */
    public $slaveDnsStatus;

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
    public $zoneId;

    /**
     * @var string
     */
    public $zoneName;

    /**
     * @var string
     */
    public $zoneTag;

    /**
     * @var string
     */
    public $zoneType;
    protected $_name = [
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'creator' => 'Creator',
        'creatorSubType' => 'CreatorSubType',
        'dnsGroup' => 'DnsGroup',
        'dnsGroupChanging' => 'DnsGroupChanging',
        'isPtr' => 'IsPtr',
        'proxyPattern' => 'ProxyPattern',
        'recordCount' => 'RecordCount',
        'remark' => 'Remark',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceTags' => 'ResourceTags',
        'slaveDnsStatus' => 'SlaveDnsStatus',
        'updateTime' => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
        'zoneId' => 'ZoneId',
        'zoneName' => 'ZoneName',
        'zoneTag' => 'ZoneTag',
        'zoneType' => 'ZoneType',
    ];

    public function validate()
    {
        if (null !== $this->resourceTags) {
            $this->resourceTags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->creatorSubType) {
            $res['CreatorSubType'] = $this->creatorSubType;
        }

        if (null !== $this->dnsGroup) {
            $res['DnsGroup'] = $this->dnsGroup;
        }

        if (null !== $this->dnsGroupChanging) {
            $res['DnsGroupChanging'] = $this->dnsGroupChanging;
        }

        if (null !== $this->isPtr) {
            $res['IsPtr'] = $this->isPtr;
        }

        if (null !== $this->proxyPattern) {
            $res['ProxyPattern'] = $this->proxyPattern;
        }

        if (null !== $this->recordCount) {
            $res['RecordCount'] = $this->recordCount;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceTags) {
            $res['ResourceTags'] = null !== $this->resourceTags ? $this->resourceTags->toArray($noStream) : $this->resourceTags;
        }

        if (null !== $this->slaveDnsStatus) {
            $res['SlaveDnsStatus'] = $this->slaveDnsStatus;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
        }

        if (null !== $this->zoneTag) {
            $res['ZoneTag'] = $this->zoneTag;
        }

        if (null !== $this->zoneType) {
            $res['ZoneType'] = $this->zoneType;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['CreatorSubType'])) {
            $model->creatorSubType = $map['CreatorSubType'];
        }

        if (isset($map['DnsGroup'])) {
            $model->dnsGroup = $map['DnsGroup'];
        }

        if (isset($map['DnsGroupChanging'])) {
            $model->dnsGroupChanging = $map['DnsGroupChanging'];
        }

        if (isset($map['IsPtr'])) {
            $model->isPtr = $map['IsPtr'];
        }

        if (isset($map['ProxyPattern'])) {
            $model->proxyPattern = $map['ProxyPattern'];
        }

        if (isset($map['RecordCount'])) {
            $model->recordCount = $map['RecordCount'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceTags'])) {
            $model->resourceTags = resourceTags::fromMap($map['ResourceTags']);
        }

        if (isset($map['SlaveDnsStatus'])) {
            $model->slaveDnsStatus = $map['SlaveDnsStatus'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        if (isset($map['ZoneTag'])) {
            $model->zoneTag = $map['ZoneTag'];
        }

        if (isset($map['ZoneType'])) {
            $model->zoneType = $map['ZoneType'];
        }

        return $model;
    }
}
