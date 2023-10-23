<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZonesResponseBody\zones;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZonesResponseBody\zones\zone\resourceTags;
use AlibabaCloud\Tea\Model;

class zone extends Model
{
    /**
     * @example 2017-12-28T13:08Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1514466483000
     *
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
     * @example true
     *
     * @var bool
     */
    public $isPtr;

    /**
     * @example ZONE
     *
     * @var string
     */
    public $proxyPattern;

    /**
     * @example 2
     *
     * @var int
     */
    public $recordCount;

    /**
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @example rg-xxxxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var resourceTags
     */
    public $resourceTags;

    /**
     * @example 2018-01-03T08:57Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 1514969843000
     *
     * @var int
     */
    public $updateTimestamp;

    /**
     * @description zone ID。
     *
     * @example ICAgICAgI_24
     *
     * @var string
     */
    public $zoneId;

    /**
     * @example test.com
     *
     * @var string
     */
    public $zoneName;

    /**
     * @example BLINK
     *
     * @var string
     */
    public $zoneTag;

    /**
     * @example CLOUD_PRODUCT_ZONE
     *
     * @var string
     */
    public $zoneType;
    protected $_name = [
        'createTime'       => 'CreateTime',
        'createTimestamp'  => 'CreateTimestamp',
        'creator'          => 'Creator',
        'creatorSubType'   => 'CreatorSubType',
        'dnsGroup'         => 'DnsGroup',
        'dnsGroupChanging' => 'DnsGroupChanging',
        'isPtr'            => 'IsPtr',
        'proxyPattern'     => 'ProxyPattern',
        'recordCount'      => 'RecordCount',
        'remark'           => 'Remark',
        'resourceGroupId'  => 'ResourceGroupId',
        'resourceTags'     => 'ResourceTags',
        'updateTime'       => 'UpdateTime',
        'updateTimestamp'  => 'UpdateTimestamp',
        'zoneId'           => 'ZoneId',
        'zoneName'         => 'ZoneName',
        'zoneTag'          => 'ZoneTag',
        'zoneType'         => 'ZoneType',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['ResourceTags'] = null !== $this->resourceTags ? $this->resourceTags->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return zone
     */
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
