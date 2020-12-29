<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumChannelsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $batchTimeout;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $chaincodeCount;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $memberJoinedCount;

    /**
     * @var int
     */
    public $preferredMaxBytes;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $supportChannelConfig;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var int
     */
    public $ownerUid;

    /**
     * @var string
     */
    public $ownerBid;

    /**
     * @var int
     */
    public $maxMessageCount;

    /**
     * @var int
     */
    public $memberCount;

    /**
     * @var bool
     */
    public $needJoined;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $consortiumId;

    /**
     * @var string
     */
    public $channelName;

    /**
     * @var string
     */
    public $deleteTime;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var int
     */
    public $consortiumChannelId;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var string
     */
    public $consortiumName;

    /**
     * @var int
     */
    public $blockCount;
    protected $_name = [
        'batchTimeout'         => 'BatchTimeout',
        'updateTime'           => 'UpdateTime',
        'chaincodeCount'       => 'ChaincodeCount',
        'state'                => 'State',
        'memberJoinedCount'    => 'MemberJoinedCount',
        'preferredMaxBytes'    => 'PreferredMaxBytes',
        'createTime'           => 'CreateTime',
        'supportChannelConfig' => 'SupportChannelConfig',
        'ownerName'            => 'OwnerName',
        'ownerUid'             => 'OwnerUid',
        'ownerBid'             => 'OwnerBid',
        'maxMessageCount'      => 'MaxMessageCount',
        'memberCount'          => 'MemberCount',
        'needJoined'           => 'NeedJoined',
        'requestId'            => 'RequestId',
        'consortiumId'         => 'ConsortiumId',
        'channelName'          => 'ChannelName',
        'deleteTime'           => 'DeleteTime',
        'channelId'            => 'ChannelId',
        'consortiumChannelId'  => 'ConsortiumChannelId',
        'deleted'              => 'Deleted',
        'consortiumName'       => 'ConsortiumName',
        'blockCount'           => 'BlockCount',
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
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->chaincodeCount) {
            $res['ChaincodeCount'] = $this->chaincodeCount;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->memberJoinedCount) {
            $res['MemberJoinedCount'] = $this->memberJoinedCount;
        }
        if (null !== $this->preferredMaxBytes) {
            $res['PreferredMaxBytes'] = $this->preferredMaxBytes;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->supportChannelConfig) {
            $res['SupportChannelConfig'] = $this->supportChannelConfig;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->ownerUid) {
            $res['OwnerUid'] = $this->ownerUid;
        }
        if (null !== $this->ownerBid) {
            $res['OwnerBid'] = $this->ownerBid;
        }
        if (null !== $this->maxMessageCount) {
            $res['MaxMessageCount'] = $this->maxMessageCount;
        }
        if (null !== $this->memberCount) {
            $res['MemberCount'] = $this->memberCount;
        }
        if (null !== $this->needJoined) {
            $res['NeedJoined'] = $this->needJoined;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }
        if (null !== $this->deleteTime) {
            $res['DeleteTime'] = $this->deleteTime;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->consortiumChannelId) {
            $res['ConsortiumChannelId'] = $this->consortiumChannelId;
        }
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }
        if (null !== $this->consortiumName) {
            $res['ConsortiumName'] = $this->consortiumName;
        }
        if (null !== $this->blockCount) {
            $res['BlockCount'] = $this->blockCount;
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['ChaincodeCount'])) {
            $model->chaincodeCount = $map['ChaincodeCount'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['MemberJoinedCount'])) {
            $model->memberJoinedCount = $map['MemberJoinedCount'];
        }
        if (isset($map['PreferredMaxBytes'])) {
            $model->preferredMaxBytes = $map['PreferredMaxBytes'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SupportChannelConfig'])) {
            $model->supportChannelConfig = $map['SupportChannelConfig'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }
        if (isset($map['OwnerBid'])) {
            $model->ownerBid = $map['OwnerBid'];
        }
        if (isset($map['MaxMessageCount'])) {
            $model->maxMessageCount = $map['MaxMessageCount'];
        }
        if (isset($map['MemberCount'])) {
            $model->memberCount = $map['MemberCount'];
        }
        if (isset($map['NeedJoined'])) {
            $model->needJoined = $map['NeedJoined'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }
        if (isset($map['DeleteTime'])) {
            $model->deleteTime = $map['DeleteTime'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['ConsortiumChannelId'])) {
            $model->consortiumChannelId = $map['ConsortiumChannelId'];
        }
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }
        if (isset($map['ConsortiumName'])) {
            $model->consortiumName = $map['ConsortiumName'];
        }
        if (isset($map['BlockCount'])) {
            $model->blockCount = $map['BlockCount'];
        }

        return $model;
    }
}
