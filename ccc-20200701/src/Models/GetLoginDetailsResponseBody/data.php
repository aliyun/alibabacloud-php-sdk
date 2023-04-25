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
        'deviceExt'      => 'DeviceExt',
        'deviceId'       => 'DeviceId',
        'deviceState'    => 'DeviceState',
        'displayName'    => 'DisplayName',
        'extension'      => 'Extension',
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
