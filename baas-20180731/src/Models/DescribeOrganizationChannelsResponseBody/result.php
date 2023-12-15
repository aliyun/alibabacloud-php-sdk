<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationChannelsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $batchTimeout;

    /**
     * @example 3
     *
     * @var int
     */
    public $blockCount;

    /**
     * @example 2
     *
     * @var int
     */
    public $chaincodeCount;

    /**
     * @example chan-channelx-1l1hmckuuisxo
     *
     * @var string
     */
    public $channelId;

    /**
     * @example consortium-lianmenyumingyi-hc5d1bwlulg7
     *
     * @var string
     */
    public $consortiumId;

    /**
     * @example name
     *
     * @var string
     */
    public $consortiumName;

    /**
     * @example 1533025590
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1533025590
     *
     * @var string
     */
    public $deleteTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $deleted;

    /**
     * @var bool
     */
    public $hybird;

    /**
     * @example 3
     *
     * @var int
     */
    public $maxMessageCount;

    /**
     * @example 3
     *
     * @var int
     */
    public $memberCount;

    /**
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @example 253
     *
     * @var string
     */
    public $ownerBid;

    /**
     * @example uid-5324
     *
     * @var string
     */
    public $ownerName;

    /**
     * @example 5324
     *
     * @var int
     */
    public $ownerUid;

    /**
     * @example 4
     *
     * @var int
     */
    public $preferredMaxBytes;

    /**
     * @example 1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3
     *
     * @var string
     */
    public $requestId;

    /**
     * @example Running
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
     * @example 1533025590
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'batchTimeout'         => 'BatchTimeout',
        'blockCount'           => 'BlockCount',
        'chaincodeCount'       => 'ChaincodeCount',
        'channelId'            => 'ChannelId',
        'consortiumId'         => 'ConsortiumId',
        'consortiumName'       => 'ConsortiumName',
        'createTime'           => 'CreateTime',
        'deleteTime'           => 'DeleteTime',
        'deleted'              => 'Deleted',
        'hybird'               => 'Hybird',
        'maxMessageCount'      => 'MaxMessageCount',
        'memberCount'          => 'MemberCount',
        'name'                 => 'Name',
        'ownerBid'             => 'OwnerBid',
        'ownerName'            => 'OwnerName',
        'ownerUid'             => 'OwnerUid',
        'preferredMaxBytes'    => 'PreferredMaxBytes',
        'requestId'            => 'RequestId',
        'state'                => 'State',
        'supportChannelConfig' => 'SupportChannelConfig',
        'updateTime'           => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchTimeout) {
            $res['BatchTimeout'] = $this->batchTimeout;
        }
        if (null !== $this->blockCount) {
            $res['BlockCount'] = $this->blockCount;
        }
        if (null !== $this->chaincodeCount) {
            $res['ChaincodeCount'] = $this->chaincodeCount;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->consortiumName) {
            $res['ConsortiumName'] = $this->consortiumName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deleteTime) {
            $res['DeleteTime'] = $this->deleteTime;
        }
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }
        if (null !== $this->hybird) {
            $res['Hybird'] = $this->hybird;
        }
        if (null !== $this->maxMessageCount) {
            $res['MaxMessageCount'] = $this->maxMessageCount;
        }
        if (null !== $this->memberCount) {
            $res['MemberCount'] = $this->memberCount;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->preferredMaxBytes) {
            $res['PreferredMaxBytes'] = $this->preferredMaxBytes;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->supportChannelConfig) {
            $res['SupportChannelConfig'] = $this->supportChannelConfig;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['BatchTimeout'])) {
            $model->batchTimeout = $map['BatchTimeout'];
        }
        if (isset($map['BlockCount'])) {
            $model->blockCount = $map['BlockCount'];
        }
        if (isset($map['ChaincodeCount'])) {
            $model->chaincodeCount = $map['ChaincodeCount'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['ConsortiumName'])) {
            $model->consortiumName = $map['ConsortiumName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeleteTime'])) {
            $model->deleteTime = $map['DeleteTime'];
        }
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }
        if (isset($map['Hybird'])) {
            $model->hybird = $map['Hybird'];
        }
        if (isset($map['MaxMessageCount'])) {
            $model->maxMessageCount = $map['MaxMessageCount'];
        }
        if (isset($map['MemberCount'])) {
            $model->memberCount = $map['MemberCount'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['PreferredMaxBytes'])) {
            $model->preferredMaxBytes = $map['PreferredMaxBytes'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['SupportChannelConfig'])) {
            $model->supportChannelConfig = $map['SupportChannelConfig'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
