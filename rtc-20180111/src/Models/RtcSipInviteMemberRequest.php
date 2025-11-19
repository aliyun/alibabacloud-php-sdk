<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;

class RtcSipInviteMemberRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appToken;

    /**
     * @var string
     */
    public $callNumber;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var bool
     */
    public $registered;

    /**
     * @var string
     */
    public $serverAddress;

    /**
     * @var string
     */
    public $sipDisplayName;

    /**
     * @var string
     */
    public $sipRoomId;

    /**
     * @var string
     */
    public $sipUri;

    /**
     * @var string
     */
    public $sipUserAgent;

    /**
     * @var string
     */
    public $sipUserId;

    /**
     * @var string
     */
    public $sipUserPassword;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'appId' => 'AppId',
        'appToken' => 'AppToken',
        'callNumber' => 'CallNumber',
        'channelId' => 'ChannelId',
        'deviceType' => 'DeviceType',
        'registered' => 'Registered',
        'serverAddress' => 'ServerAddress',
        'sipDisplayName' => 'SipDisplayName',
        'sipRoomId' => 'SipRoomId',
        'sipUri' => 'SipUri',
        'sipUserAgent' => 'SipUserAgent',
        'sipUserId' => 'SipUserId',
        'sipUserPassword' => 'SipUserPassword',
        'taskId' => 'TaskId',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appToken) {
            $res['AppToken'] = $this->appToken;
        }

        if (null !== $this->callNumber) {
            $res['CallNumber'] = $this->callNumber;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }

        if (null !== $this->registered) {
            $res['Registered'] = $this->registered;
        }

        if (null !== $this->serverAddress) {
            $res['ServerAddress'] = $this->serverAddress;
        }

        if (null !== $this->sipDisplayName) {
            $res['SipDisplayName'] = $this->sipDisplayName;
        }

        if (null !== $this->sipRoomId) {
            $res['SipRoomId'] = $this->sipRoomId;
        }

        if (null !== $this->sipUri) {
            $res['SipUri'] = $this->sipUri;
        }

        if (null !== $this->sipUserAgent) {
            $res['SipUserAgent'] = $this->sipUserAgent;
        }

        if (null !== $this->sipUserId) {
            $res['SipUserId'] = $this->sipUserId;
        }

        if (null !== $this->sipUserPassword) {
            $res['SipUserPassword'] = $this->sipUserPassword;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppToken'])) {
            $model->appToken = $map['AppToken'];
        }

        if (isset($map['CallNumber'])) {
            $model->callNumber = $map['CallNumber'];
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }

        if (isset($map['Registered'])) {
            $model->registered = $map['Registered'];
        }

        if (isset($map['ServerAddress'])) {
            $model->serverAddress = $map['ServerAddress'];
        }

        if (isset($map['SipDisplayName'])) {
            $model->sipDisplayName = $map['SipDisplayName'];
        }

        if (isset($map['SipRoomId'])) {
            $model->sipRoomId = $map['SipRoomId'];
        }

        if (isset($map['SipUri'])) {
            $model->sipUri = $map['SipUri'];
        }

        if (isset($map['SipUserAgent'])) {
            $model->sipUserAgent = $map['SipUserAgent'];
        }

        if (isset($map['SipUserId'])) {
            $model->sipUserId = $map['SipUserId'];
        }

        if (isset($map['SipUserPassword'])) {
            $model->sipUserPassword = $map['SipUserPassword'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
