<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumChannelsResponseBody;

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
     * @example 2
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
     * @example mychammel
     *
     * @var string
     */
    public $channelName;

    /**
     * @example 1
     *
     * @var int
     */
    public $consortiumChannelId;

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
     * @example 1544411108000
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1544411108000
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
     * @example 200
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
     * @example 3
     *
     * @var string
     */
    public $memberJoinedCount;

    /**
     * @example true
     *
     * @var bool
     */
    public $needJoined;

    /**
     * @example 26842
     *
     * @var string
     */
    public $ownerBid;

    /**
     * @example uid-*
     *
     * @var string
     */
    public $ownerName;

    /**
     * @example 212
     *
     * @var int
     */
    public $ownerUid;

    /**
     * @example 102410241
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
     * @example 1544411108000
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'batchTimeout'         => 'BatchTimeout',
        'blockCount'           => 'BlockCount',
        'chaincodeCount'       => 'ChaincodeCount',
        'channelId'            => 'ChannelId',
        'channelName'          => 'ChannelName',
        'consortiumChannelId'  => 'ConsortiumChannelId',
        'consortiumId'         => 'ConsortiumId',
        'consortiumName'       => 'ConsortiumName',
        'createTime'           => 'CreateTime',
        'deleteTime'           => 'DeleteTime',
        'deleted'              => 'Deleted',
        'maxMessageCount'      => 'MaxMessageCount',
        'memberCount'          => 'MemberCount',
        'memberJoinedCount'    => 'MemberJoinedCount',
        'needJoined'           => 'NeedJoined',
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
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }
        if (null !== $this->consortiumChannelId) {
            $res['ConsortiumChannelId'] = $this->consortiumChannelId;
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
        if (null !== $this->maxMessageCount) {
            $res['MaxMessageCount'] = $this->maxMessageCount;
        }
        if (null !== $this->memberCount) {
            $res['MemberCount'] = $this->memberCount;
        }
        if (null !== $this->memberJoinedCount) {
            $res['MemberJoinedCount'] = $this->memberJoinedCount;
        }
        if (null !== $this->needJoined) {
            $res['NeedJoined'] = $this->needJoined;
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
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }
        if (isset($map['ConsortiumChannelId'])) {
            $model->consortiumChannelId = $map['ConsortiumChannelId'];
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
        if (isset($map['MaxMessageCount'])) {
            $model->maxMessageCount = $map['MaxMessageCount'];
        }
        if (isset($map['MemberCount'])) {
            $model->memberCount = $map['MemberCount'];
        }
        if (isset($map['MemberJoinedCount'])) {
            $model->memberJoinedCount = $map['MemberJoinedCount'];
        }
        if (isset($map['NeedJoined'])) {
            $model->needJoined = $map['NeedJoined'];
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
