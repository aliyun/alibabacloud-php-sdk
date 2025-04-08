<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\AnswerCallResponseBody\data\callContext;

use AlibabaCloud\Dara\Model;

class channelContexts extends Model
{
    /**
     * @var string
     */
    public $callType;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $channelState;

    /**
     * @var string
     */
    public $channelVariables;

    /**
     * @var string
     */
    public $destination;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $originator;

    /**
     * @var string
     */
    public $releaseInitiator;

    /**
     * @var string
     */
    public $releaseReason;

    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $userExtension;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'callType' => 'CallType',
        'channelId' => 'ChannelId',
        'channelState' => 'ChannelState',
        'channelVariables' => 'ChannelVariables',
        'destination' => 'Destination',
        'index' => 'Index',
        'jobId' => 'JobId',
        'originator' => 'Originator',
        'releaseInitiator' => 'ReleaseInitiator',
        'releaseReason' => 'ReleaseReason',
        'skillGroupId' => 'SkillGroupId',
        'timestamp' => 'Timestamp',
        'userExtension' => 'UserExtension',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->channelState) {
            $res['ChannelState'] = $this->channelState;
        }

        if (null !== $this->channelVariables) {
            $res['ChannelVariables'] = $this->channelVariables;
        }

        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->originator) {
            $res['Originator'] = $this->originator;
        }

        if (null !== $this->releaseInitiator) {
            $res['ReleaseInitiator'] = $this->releaseInitiator;
        }

        if (null !== $this->releaseReason) {
            $res['ReleaseReason'] = $this->releaseReason;
        }

        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        if (null !== $this->userExtension) {
            $res['UserExtension'] = $this->userExtension;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['ChannelState'])) {
            $model->channelState = $map['ChannelState'];
        }

        if (isset($map['ChannelVariables'])) {
            $model->channelVariables = $map['ChannelVariables'];
        }

        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['Originator'])) {
            $model->originator = $map['Originator'];
        }

        if (isset($map['ReleaseInitiator'])) {
            $model->releaseInitiator = $map['ReleaseInitiator'];
        }

        if (isset($map['ReleaseReason'])) {
            $model->releaseReason = $map['ReleaseReason'];
        }

        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        if (isset($map['UserExtension'])) {
            $model->userExtension = $map['UserExtension'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
