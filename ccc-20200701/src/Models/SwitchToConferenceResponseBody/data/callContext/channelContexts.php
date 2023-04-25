<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\SwitchToConferenceResponseBody\data\callContext;

use AlibabaCloud\Tea\Model;

class channelContexts extends Model
{
    /**
     * @example OUTBOUND
     *
     * @var string
     */
    public $callType;

    /**
     * @example MONITORING
     *
     * @var string
     */
    public $channelFlags;

    /**
     * @example ch:user:131888****->8001****:1609225718294:job-6538214103685****
     *
     * @var string
     */
    public $channelId;

    /**
     * @example NONE
     *
     * @var string
     */
    public $channelState;

    /**
     * @example 8001****
     *
     * @var string
     */
    public $destination;

    /**
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @example job-6538214103685****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 1318888****
     *
     * @var string
     */
    public $originator;

    /**
     * @example 1390501****
     *
     * @var string
     */
    public $releaseInitiator;

    /**
     * @example 404 - No destination
     *
     * @var string
     */
    public $releaseReason;

    /**
     * @example skillgroup@ccc-test
     *
     * @var string
     */
    public $skillGroupId;

    /**
     * @example 1609255716900
     *
     * @var int
     */
    public $timestamp;

    /**
     * @example 8032****
     *
     * @var string
     */
    public $userExtension;

    /**
     * @example agent@ccc-test
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'callType'         => 'CallType',
        'channelFlags'     => 'ChannelFlags',
        'channelId'        => 'ChannelId',
        'channelState'     => 'ChannelState',
        'destination'      => 'Destination',
        'index'            => 'Index',
        'jobId'            => 'JobId',
        'originator'       => 'Originator',
        'releaseInitiator' => 'ReleaseInitiator',
        'releaseReason'    => 'ReleaseReason',
        'skillGroupId'     => 'SkillGroupId',
        'timestamp'        => 'Timestamp',
        'userExtension'    => 'UserExtension',
        'userId'           => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }
        if (null !== $this->channelFlags) {
            $res['ChannelFlags'] = $this->channelFlags;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->channelState) {
            $res['ChannelState'] = $this->channelState;
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

    /**
     * @param array $map
     *
     * @return channelContexts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }
        if (isset($map['ChannelFlags'])) {
            $model->channelFlags = $map['ChannelFlags'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['ChannelState'])) {
            $model->channelState = $map['ChannelState'];
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
