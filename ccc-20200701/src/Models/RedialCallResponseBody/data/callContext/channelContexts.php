<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\RedialCallResponseBody\data\callContext;

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
     * @example COACHING
     *
     * @var string
     */
    public $channelFlags;

    /**
     * @example ch:user:1390501****->8032****:1609138902226:job-653821410368****
     *
     * @var string
     */
    public $channelId;

    /**
     * @example CREATED
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
     * @example job-6573574060089****
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
     * @example 139xxxx0501
     *
     * @var string
     */
    public $releaseInitiator;

    /**
     * @example 486:USER_BUSY
     *
     * @var string
     */
    public $releaseReason;

    /**
     * @example 1609138903315
     *
     * @var int
     */
    public $timestamp;

    /**
     * @example 8000****
     *
     * @var string
     */
    public $userExtension;

    /**
     * @example samzhang@abc
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
        'jobId'            => 'JobId',
        'originator'       => 'Originator',
        'releaseInitiator' => 'ReleaseInitiator',
        'releaseReason'    => 'ReleaseReason',
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
