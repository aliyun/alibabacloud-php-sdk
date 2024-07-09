<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZonesResponseBody\zones;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZonesResponseBody\zones\zone\resourceTags;
use AlibabaCloud\Tea\Model;

class zone extends Model
{
    /**
     * @description The time when the zone was created. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2017-12-28T13:08Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the zone was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1514466483000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The creator of the zone.
     *
     * @example 5463564356
     *
     * @var string
     */
    public $creator;

    /**
     * @description The type of the user account.
     *
     *   **CUSTOMER**: Alibaba Cloud account
     *   **SUB**: RAM user
     *   **STS**: assumed role that obtains the Security Token Service (STS) token of a RAM role
     *   **OTHER**: other types
     *
     * @example SUB
     *
     * @var string
     */
    public $creatorSubType;

    /**
     * @description The logical location type of the built-in authoritative module in which the zone is added. Valid values:
     *
     *   **NORMAL_ZONE**: regular module
     *   **FAST_ZONE**: acceleration module
     *
     * @example NORMAL_ZONE
     *
     * @var string
     */
    public $dnsGroup;

    /**
     * @description Indicates whether the zone is being removed to another logical location. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $dnsGroupChanging;

    /**
     * @description Indicates whether the zone is a reverse lookup zone. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $isPtr;

    /**
     * @description Indicates whether the recursive resolution proxy feature is enabled for the zone. Valid values:
     *
     *   **ZONE**: The recursive resolution proxy feature is disabled for the zone.
     *   **RECORD**: The recursive resolution proxy feature is enabled for the zone.
     *
     * @example ZONE
     *
     * @var string
     */
    public $proxyPattern;

    /**
     * @description The number of Domain Name System (DNS) records.
     *
     * @example 2
     *
     * @var int
     */
    public $recordCount;

    /**
     * @description The description of the zone.
     *
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-xxxxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags added to the resources.
     *
     * @var resourceTags
     */
    public $resourceTags;

    /**
     * @description The time when the zone was last modified. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2018-01-03T08:57Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The time when the DNS record was updated. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since 00:00:00 UTC on January 1, 1970.
     *
     * @example 1514969843000
     *
     * @var int
     */
    public $updateTimestamp;

    /**
     * @description The zone ID.
     *
     * @example 6d83e3b31aa60ca4aaa7161f1b6b**95
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description The name of the zone.
     *
     * @example test.com
     *
     * @var string
     */
    public $zoneName;

    /**
     * @description The type of the cloud service. Valid values:
     *
     *   If ZoneType is set to AUTH_ZONE, no value is returned for this parameter.
     *   If ZoneType is set to CLOUD_PRODUCT_ZONE, the type of the cloud service is returned.
     *
     * @example BLINK
     *
     * @var string
     */
    public $zoneTag;

    /**
     * @description The type of zones. Valid values:
     *
     *   **AUTH_ZONE**: authoritative zone
     *   **CLOUD_PRODUCT_ZONE**: authoritative zone for cloud services
     *
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
