<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetLoginDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example sh-wss-ccc.aliyuncs.com
     *
     * @var string
     */
    public $agentServerUrl;

    /**
     * @var string
     */
    public $avatarUrl;

    /**
     * @var string
     */
    public $chatAppId;

    /**
     * @var string
     */
    public $chatAppKey;

    /**
     * @var string
     */
    public $chatDeviceId;

    /**
     * @var string
     */
    public $chatLoginToken;

    /**
     * @var string
     */
    public $chatServerUrl;

    /**
     * @var string
     */
    public $chatUserId;

    /**
     * @example 8033****
     *
     * @var string
     */
    public $deviceExt;

    /**
     * @example Yealink SIP-T23G 44.84.XX.XX
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example OFFLINE
     *
     * @var string
     */
    public $deviceState;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @example 8001****
     *
     * @var string
     */
    public $extension;

    /**
     * @var string
     */
    public $nickname;

    /**
     * @example zi31STIMtIfa/UN2l+6lww****
     *
     * @var string
     */
    public $signature;

    /**
     * @example zi31STIMtIfa/UN2l+6lww****
     *
     * @var string
     */
    public $signature2;

    /**
     * @example sh-sip-ccc.aliyuncs.com:443
     *
     * @var string
     */
    public $sipServerUrl;

    /**
     * @example agent@ccc-test
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userKey;

    /**
     * @example 802001:1656406628862"
     *
     * @var string
     */
    public $userKey2;

    /**
     * @example ON_SITE
     *
     * @var string
     */
    public $workMode;
    protected $_name = [
        'agentServerUrl' => 'AgentServerUrl',
        'avatarUrl'      => 'AvatarUrl',
        'chatAppId'      => 'ChatAppId',
        'chatAppKey'     => 'ChatAppKey',
        'chatDeviceId'   => 'ChatDeviceId',
        'chatLoginToken' => 'ChatLoginToken',
        'chatServerUrl'  => 'ChatServerUrl',
        'chatUserId'     => 'ChatUserId',
        'deviceExt'      => 'DeviceExt',
        'deviceId'       => 'DeviceId',
        'deviceState'    => 'DeviceState',
        'displayName'    => 'DisplayName',
        'extension'      => 'Extension',
        'nickname'       => 'Nickname',
        'signature'      => 'Signature',
        'signature2'     => 'Signature2',
        'sipServerUrl'   => 'SipServerUrl',
        'userId'         => 'UserId',
        'userKey'        => 'UserKey',
        'userKey2'       => 'UserKey2',
        'workMode'       => 'WorkMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentServerUrl) {
            $res['AgentServerUrl'] = $this->agentServerUrl;
        }
        if (null !== $this->avatarUrl) {
            $res['AvatarUrl'] = $this->avatarUrl;
        }
        if (null !== $this->chatAppId) {
            $res['ChatAppId'] = $this->chatAppId;
        }
        if (null !== $this->chatAppKey) {
            $res['ChatAppKey'] = $this->chatAppKey;
        }
        if (null !== $this->chatDeviceId) {
            $res['ChatDeviceId'] = $this->chatDeviceId;
        }
        if (null !== $this->chatLoginToken) {
            $res['ChatLoginToken'] = $this->chatLoginToken;
        }
        if (null !== $this->chatServerUrl) {
            $res['ChatServerUrl'] = $this->chatServerUrl;
        }
        if (null !== $this->chatUserId) {
            $res['ChatUserId'] = $this->chatUserId;
        }
        if (null !== $this->deviceExt) {
            $res['DeviceExt'] = $this->deviceExt;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceState) {
            $res['DeviceState'] = $this->deviceState;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->nickname) {
            $res['Nickname'] = $this->nickname;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->signature2) {
            $res['Signature2'] = $this->signature2;
        }
        if (null !== $this->sipServerUrl) {
            $res['SipServerUrl'] = $this->sipServerUrl;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userKey) {
            $res['UserKey'] = $this->userKey;
        }
        if (null !== $this->userKey2) {
            $res['UserKey2'] = $this->userKey2;
        }
        if (null !== $this->workMode) {
            $res['WorkMode'] = $this->workMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentServerUrl'])) {
            $model->agentServerUrl = $map['AgentServerUrl'];
        }
        if (isset($map['AvatarUrl'])) {
            $model->avatarUrl = $map['AvatarUrl'];
        }
        if (isset($map['ChatAppId'])) {
            $model->chatAppId = $map['ChatAppId'];
        }
        if (isset($map['ChatAppKey'])) {
            $model->chatAppKey = $map['ChatAppKey'];
        }
        if (isset($map['ChatDeviceId'])) {
            $model->chatDeviceId = $map['ChatDeviceId'];
        }
        if (isset($map['ChatLoginToken'])) {
            $model->chatLoginToken = $map['ChatLoginToken'];
        }
        if (isset($map['ChatServerUrl'])) {
            $model->chatServerUrl = $map['ChatServerUrl'];
        }
        if (isset($map['ChatUserId'])) {
            $model->chatUserId = $map['ChatUserId'];
        }
        if (isset($map['DeviceExt'])) {
            $model->deviceExt = $map['DeviceExt'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceState'])) {
            $model->deviceState = $map['DeviceState'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['Nickname'])) {
            $model->nickname = $map['Nickname'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['Signature2'])) {
            $model->signature2 = $map['Signature2'];
        }
        if (isset($map['SipServerUrl'])) {
            $model->sipServerUrl = $map['SipServerUrl'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserKey'])) {
            $model->userKey = $map['UserKey'];
        }
        if (isset($map['UserKey2'])) {
            $model->userKey2 = $map['UserKey2'];
        }
        if (isset($map['WorkMode'])) {
            $model->workMode = $map['WorkMode'];
        }

        return $model;
    }
}
