<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\CreateEcosphereResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\CreateEcosphereResponseBody\result\organizations;
use AlibabaCloud\SDK\Baas\V20180731\Models\CreateEcosphereResponseBody\result\specification;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $channelCount;

    /**
     * @example Any
     *
     * @var string
     */
    public $channelPolicy;

    /**
     * @example Pending
     *
     * @var string
     */
    public $clusterState;

    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example consortium-lianmenyumingyi-hc5d1bwlulg7
     *
     * @var string
     */
    public $consortiumId;

    /**
     * @example 1544411108000
     *
     * @var string
     */
    public $createTime;

    /**
     * @example hello
     *
     * @var string
     */
    public $description;

    /**
     * @example hello
     *
     * @var string
     */
    public $domain;

    /**
     * @example 2
     *
     * @var int
     */
    public $memberCount;

    /**
     * @example hello
     *
     * @var string
     */
    public $name;

    /**
     * @example 2
     *
     * @var int
     */
    public $ordererCount;

    /**
     * @example Kafka
     *
     * @var string
     */
    public $ordererType;

    /**
     * @var organizations[]
     */
    public $organizations;

    /**
     * @example 26842
     *
     * @var string
     */
    public $ownerBid;

    /**
     * @example 144566
     *
     * @var int
     */
    public $ownerUid;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example Pending
     *
     * @var string
     */
    public $serviceState;

    /**
     * @example basic
     *
     * @var string
     */
    public $specName;

    /**
     * @var specification
     */
    public $specification;

    /**
     * @example zone
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'channelCount'  => 'ChannelCount',
        'channelPolicy' => 'ChannelPolicy',
        'clusterState'  => 'ClusterState',
        'code'          => 'Code',
        'consortiumId'  => 'ConsortiumId',
        'createTime'    => 'CreateTime',
        'description'   => 'Description',
        'domain'        => 'Domain',
        'memberCount'   => 'MemberCount',
        'name'          => 'Name',
        'ordererCount'  => 'OrdererCount',
        'ordererType'   => 'OrdererType',
        'organizations' => 'Organizations',
        'ownerBid'      => 'OwnerBid',
        'ownerUid'      => 'OwnerUid',
        'regionId'      => 'RegionId',
        'serviceState'  => 'ServiceState',
        'specName'      => 'SpecName',
        'specification' => 'Specification',
        'zoneId'        => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelCount) {
            $res['ChannelCount'] = $this->channelCount;
        }
        if (null !== $this->channelPolicy) {
            $res['ChannelPolicy'] = $this->channelPolicy;
        }
        if (null !== $this->clusterState) {
            $res['ClusterState'] = $this->clusterState;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->memberCount) {
            $res['MemberCount'] = $this->memberCount;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ordererCount) {
            $res['OrdererCount'] = $this->ordererCount;
        }
        if (null !== $this->ordererType) {
            $res['OrdererType'] = $this->ordererType;
        }
        if (null !== $this->organizations) {
            $res['Organizations'] = [];
            if (null !== $this->organizations && \is_array($this->organizations)) {
                $n = 0;
                foreach ($this->organizations as $item) {
                    $res['Organizations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ownerBid) {
            $res['OwnerBid'] = $this->ownerBid;
        }
        if (null !== $this->ownerUid) {
            $res['OwnerUid'] = $this->ownerUid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceState) {
            $res['ServiceState'] = $this->serviceState;
        }
        if (null !== $this->specName) {
            $res['SpecName'] = $this->specName;
        }
        if (null !== $this->specification) {
            $res['Specification'] = null !== $this->specification ? $this->specification->toMap() : null;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelCount'])) {
            $model->channelCount = $map['ChannelCount'];
        }
        if (isset($map['ChannelPolicy'])) {
            $model->channelPolicy = $map['ChannelPolicy'];
        }
        if (isset($map['ClusterState'])) {
            $model->clusterState = $map['ClusterState'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['MemberCount'])) {
            $model->memberCount = $map['MemberCount'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OrdererCount'])) {
            $model->ordererCount = $map['OrdererCount'];
        }
        if (isset($map['OrdererType'])) {
            $model->ordererType = $map['OrdererType'];
        }
        if (isset($map['Organizations'])) {
            if (!empty($map['Organizations'])) {
                $model->organizations = [];
                $n                    = 0;
                foreach ($map['Organizations'] as $item) {
                    $model->organizations[$n++] = null !== $item ? organizations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OwnerBid'])) {
            $model->ownerBid = $map['OwnerBid'];
        }
        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceState'])) {
            $model->serviceState = $map['ServiceState'];
        }
        if (isset($map['SpecName'])) {
            $model->specName = $map['SpecName'];
        }
        if (isset($map['Specification'])) {
            $model->specification = specification::fromMap($map['Specification']);
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
