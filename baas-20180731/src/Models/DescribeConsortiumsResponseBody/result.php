<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeConsortiumsResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeConsortiumsResponseBody\result\tags;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $CAName;

    /**
     * @var string
     */
    public $CAUrl;

    /**
     * @example 2
     *
     * @var int
     */
    public $channelCount;

    /**
     * @example any
     *
     * @var string
     */
    public $channelPolicy;

    /**
     * @example code
     *
     * @var string
     */
    public $codeName;

    /**
     * @example consortium-lianmenyumingyi-hc5d1bwl****
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
     * @example domain
     *
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $expireState;

    /**
     * @example 1544411108000
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $hybrid;

    /**
     * @var string
     */
    public $MSP;

    /**
     * @var string
     */
    public $majorVersion;

    /**
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ordererCount;

    /**
     * @example 2
     *
     * @var int
     */
    public $organizationCount;

    /**
     * @example 26842
     *
     * @var string
     */
    public $ownerBid;

    /**
     * @example ownername
     *
     * @var string
     */
    public $ownerName;

    /**
     * @example 1287126
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
     * @example 1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3
     *
     * @var string
     */
    public $requestId;

    /**
     * @example basic
     *
     * @var string
     */
    public $specName;

    /**
     * @example Pending
     *
     * @var string
     */
    public $state;

    /**
     * @example true
     *
     * @var bool
     */
    public $supportChannelConfig;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'CAName'               => 'CAName',
        'CAUrl'                => 'CAUrl',
        'channelCount'         => 'ChannelCount',
        'channelPolicy'        => 'ChannelPolicy',
        'codeName'             => 'CodeName',
        'consortiumId'         => 'ConsortiumId',
        'createTime'           => 'CreateTime',
        'domain'               => 'Domain',
        'expireState'          => 'ExpireState',
        'expiredTime'          => 'ExpiredTime',
        'hybrid'               => 'Hybrid',
        'MSP'                  => 'MSP',
        'majorVersion'         => 'MajorVersion',
        'name'                 => 'Name',
        'ordererCount'         => 'OrdererCount',
        'organizationCount'    => 'OrganizationCount',
        'ownerBid'             => 'OwnerBid',
        'ownerName'            => 'OwnerName',
        'ownerUid'             => 'OwnerUid',
        'regionId'             => 'RegionId',
        'requestId'            => 'RequestId',
        'specName'             => 'SpecName',
        'state'                => 'State',
        'supportChannelConfig' => 'SupportChannelConfig',
        'tags'                 => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CAName) {
            $res['CAName'] = $this->CAName;
        }
        if (null !== $this->CAUrl) {
            $res['CAUrl'] = $this->CAUrl;
        }
        if (null !== $this->channelCount) {
            $res['ChannelCount'] = $this->channelCount;
        }
        if (null !== $this->channelPolicy) {
            $res['ChannelPolicy'] = $this->channelPolicy;
        }
        if (null !== $this->codeName) {
            $res['CodeName'] = $this->codeName;
        }
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->expireState) {
            $res['ExpireState'] = $this->expireState;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->hybrid) {
            $res['Hybrid'] = $this->hybrid;
        }
        if (null !== $this->MSP) {
            $res['MSP'] = $this->MSP;
        }
        if (null !== $this->majorVersion) {
            $res['MajorVersion'] = $this->majorVersion;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ordererCount) {
            $res['OrdererCount'] = $this->ordererCount;
        }
        if (null !== $this->organizationCount) {
            $res['OrganizationCount'] = $this->organizationCount;
        }
        if (null !== $this->ownerBid) {
            $res['OwnerBid'] = $this->ownerBid;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->ownerUid) {
            $res['OwnerUid'] = $this->ownerUid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->specName) {
            $res['SpecName'] = $this->specName;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->supportChannelConfig) {
            $res['SupportChannelConfig'] = $this->supportChannelConfig;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['CAName'])) {
            $model->CAName = $map['CAName'];
        }
        if (isset($map['CAUrl'])) {
            $model->CAUrl = $map['CAUrl'];
        }
        if (isset($map['ChannelCount'])) {
            $model->channelCount = $map['ChannelCount'];
        }
        if (isset($map['ChannelPolicy'])) {
            $model->channelPolicy = $map['ChannelPolicy'];
        }
        if (isset($map['CodeName'])) {
            $model->codeName = $map['CodeName'];
        }
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['ExpireState'])) {
            $model->expireState = $map['ExpireState'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['Hybrid'])) {
            $model->hybrid = $map['Hybrid'];
        }
        if (isset($map['MSP'])) {
            $model->MSP = $map['MSP'];
        }
        if (isset($map['MajorVersion'])) {
            $model->majorVersion = $map['MajorVersion'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OrdererCount'])) {
            $model->ordererCount = $map['OrdererCount'];
        }
        if (isset($map['OrganizationCount'])) {
            $model->organizationCount = $map['OrganizationCount'];
        }
        if (isset($map['OwnerBid'])) {
            $model->ownerBid = $map['OwnerBid'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SpecName'])) {
            $model->specName = $map['SpecName'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['SupportChannelConfig'])) {
            $model->supportChannelConfig = $map['SupportChannelConfig'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
