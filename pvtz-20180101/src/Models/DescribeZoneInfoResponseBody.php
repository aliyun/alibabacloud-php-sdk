<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneInfoResponseBody\bindEdgeDnsClusters;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneInfoResponseBody\bindVpcs;

class DescribeZoneInfoResponseBody extends Model
{
    /**
     * @var bindEdgeDnsClusters
     */
    public $bindEdgeDnsClusters;

    /**
     * @var bindVpcs
     */
    public $bindVpcs;

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
    public $creatorType;

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
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $slaveDns;

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
        'bindEdgeDnsClusters' => 'BindEdgeDnsClusters',
        'bindVpcs' => 'BindVpcs',
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'creator' => 'Creator',
        'creatorType' => 'CreatorType',
        'dnsGroup' => 'DnsGroup',
        'dnsGroupChanging' => 'DnsGroupChanging',
        'isPtr' => 'IsPtr',
        'proxyPattern' => 'ProxyPattern',
        'recordCount' => 'RecordCount',
        'remark' => 'Remark',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'slaveDns' => 'SlaveDns',
        'updateTime' => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
        'zoneId' => 'ZoneId',
        'zoneName' => 'ZoneName',
        'zoneTag' => 'ZoneTag',
        'zoneType' => 'ZoneType',
    ];

    public function validate()
    {
        if (null !== $this->bindEdgeDnsClusters) {
            $this->bindEdgeDnsClusters->validate();
        }
        if (null !== $this->bindVpcs) {
            $this->bindVpcs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindEdgeDnsClusters) {
            $res['BindEdgeDnsClusters'] = null !== $this->bindEdgeDnsClusters ? $this->bindEdgeDnsClusters->toArray($noStream) : $this->bindEdgeDnsClusters;
        }

        if (null !== $this->bindVpcs) {
            $res['BindVpcs'] = null !== $this->bindVpcs ? $this->bindVpcs->toArray($noStream) : $this->bindVpcs;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindEdgeDnsClusters'])) {
            $model->bindEdgeDnsClusters = bindEdgeDnsClusters::fromMap($map['BindEdgeDnsClusters']);
        }

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
