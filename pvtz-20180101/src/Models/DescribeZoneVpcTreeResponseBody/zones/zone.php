<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneVpcTreeResponseBody\zones;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneVpcTreeResponseBody\zones\zone\vpcs;
use AlibabaCloud\Tea\Model;

class zone extends Model
{
    /**
     * @example 2019-09-18T08:20Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1568794812000
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
     * @example false
     *
     * @var bool
     */
    public $isPtr;

    /**
     * @example 1
     *
     * @var int
     */
    public $recordCount;

    /**
     * @example demo
     *
     * @var string
     */
    public $remark;

    /**
     * @example 2019-09-18T08:20Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 1568794834000
     *
     * @var int
     */
    public $updateTimestamp;

    /**
     * @var vpcs
     */
    public $vpcs;

    /**
     * @description Zone id
     *
     * @example 6d83e3b31aa60ca4aaa7161f1b6baa95
     *
     * @var string
     */
    public $zoneId;

    /**
     * @example localzone.demo
     *
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
        'createTime'       => 'CreateTime',
        'createTimestamp'  => 'CreateTimestamp',
        'creator'          => 'Creator',
        'creatorType'      => 'CreatorType',
        'dnsGroup'         => 'DnsGroup',
        'dnsGroupChanging' => 'DnsGroupChanging',
        'isPtr'            => 'IsPtr',
        'recordCount'      => 'RecordCount',
        'remark'           => 'Remark',
        'updateTime'       => 'UpdateTime',
        'updateTimestamp'  => 'UpdateTimestamp',
        'vpcs'             => 'Vpcs',
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
        if (null !== $this->recordCount) {
            $res['RecordCount'] = $this->recordCount;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }
        if (null !== $this->vpcs) {
            $res['Vpcs'] = null !== $this->vpcs ? $this->vpcs->toMap() : null;
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
        if (isset($map['RecordCount'])) {
            $model->recordCount = $map['RecordCount'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }
        if (isset($map['Vpcs'])) {
            $model->vpcs = vpcs::fromMap($map['Vpcs']);
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
