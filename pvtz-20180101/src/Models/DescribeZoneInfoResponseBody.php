<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneInfoResponseBody\bindVpcs;
use AlibabaCloud\Tea\Model;

class DescribeZoneInfoResponseBody extends Model
{
    /**
     * @description The virtual private clouds (VPCs) bound to the zone.
     *
     * @var bindVpcs
     */
    public $bindVpcs;

    /**
     * @description The time when the zone was created. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2018-01-23T03:15Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the zone was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1516775741000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The creator of the zone.
     *
     * @example 2312234523451342
     *
     * @var string
     */
    public $creator;

    /**
     * @description The type of the operator.
     *
     * @example USER
     *
     * @var string
     */
    public $creatorType;

    /**
     * @description The logical location of the built-in authoritative module in which the zone is added. Valid values:
     *
     *   NORMAL_ZONE: regular module
     *   FAST_ZONE: acceleration module
     *
     * @example FAST_ZONE
     *
     * @var string
     */
    public $dnsGroup;

    /**
     * @description Indicates whether the zone is being removed to another logical location. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $dnsGroupChanging;

    /**
     * @description *   Indicates whether the zone is a reverse lookup zone. Valid values: true and false. The value true indicates that the zone is a reverse lookup zone.
     *   The value false indicates that the zone is not a reverse lookup zone.
     *
     * @example false
     *
     * @var bool
     */
    public $isPtr;

    /**
     * @description *   Indicates whether the recursive resolution proxy feature is enabled for the zone. Valid values: **ZONE**: The recursive resolution proxy feature is disabled for the zone.
     *   **RECORD**: The recursive resolution proxy feature is enabled for the zone.
     *
     * @example ZONE
     *
     * @var string
     */
    public $proxyPattern;

    /**
     * @description The total number of DNS records.
     *
     * @example 2
     *
     * @var int
     */
    public $recordCount;

    /**
     * @description The description of the zone.
     *
     * @example specialZone
     *
     * @var string
     */
    public $remark;

    /**
     * @description The request ID.
     *
     * @example F73F41A3-B6DD-42CA-A793-FFF93277835D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-xxxxxxxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Indicates whether the secondary Domain Name System (DNS) feature is enabled for the zone. Valid values:
     *
     *   **true**: The secondary DNS feature is enabled.
     *   **false**: The secondary DNS feature is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $slaveDns;

    /**
     * @description The time when the zone was last modified. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2018-01-24T06:35Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The time when the zone was last modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1516775741000
     *
     * @var int
     */
    public $updateTimestamp;

    /**
     * @description The global ID of the zone.
     *
     * @example AgIDE0OQ_149<
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description The zone name.
     *
     * @example test.com
     *
     * @var string
     */
    public $zoneName;

    /**
     * @description *   If ZoneType is set to AUTH_ZONE, no value is returned for this parameter.
     *   If ZoneType is set to CLOUD_PRODUCT_ZONE, the type of the cloud service is returned.
     *
     * @example pvtz
     *
     * @var string
     */
    public $zoneTag;

    /**
     * @description The type of the zone. Valid values:
     *
     *   AUTH_ZONE: authoritative zone
     *   CLOUD_PRODUCT_ZONE: authoritative zone for cloud services
     *
     * @example CLOUD_PRODUCT_ZONE
     *
     * @var string
     */
    public $zoneType;
    protected $_name = [
        'bindVpcs'         => 'BindVpcs',
        'createTime'       => 'CreateTime',
        'createTimestamp'  => 'CreateTimestamp',
        'creator'          => 'Creator',
        'creatorType'      => 'CreatorType',
        'dnsGroup'         => 'DnsGroup',
        'dnsGroupChanging' => 'DnsGroupChanging',
        'isPtr'            => 'IsPtr',
        'proxyPattern'     => 'ProxyPattern',
        'recordCount'      => 'RecordCount',
        'remark'           => 'Remark',
        'requestId'        => 'RequestId',
        'resourceGroupId'  => 'ResourceGroupId',
        'slaveDns'         => 'SlaveDns',
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
        if (null !== $this->bindVpcs) {
            $res['BindVpcs'] = null !== $this->bindVpcs ? $this->bindVpcs->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->creatorType) {
            $res['CreatorType'] = $this->creatorType;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->slaveDns) {
            $res['SlaveDns'] = $this->slaveDns;
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
     * @return DescribeZoneInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindVpcs'])) {
            $model->bindVpcs = bindVpcs::fromMap($map['BindVpcs']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['CreatorType'])) {
            $model->creatorType = $map['CreatorType'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SlaveDns'])) {
            $model->slaveDns = $map['SlaveDns'];
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
