<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetLoginDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $agentServerUrl;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $extension;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $sipServerUrl;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userKey;

    /**
     * @var string
     */
    public $workMode;
    protected $_name = [
        'agentServerUrl' => 'AgentServerUrl',
        'deviceId'       => 'DeviceId',
        'displayName'    => 'DisplayName',
        'extension'      => 'Extension',
        'signature'      => 'Signature',
        'sipServerUrl'   => 'SipServerUrl',
        'userId'         => 'UserId',
        'userKey'        => 'UserKey',
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
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
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
        if (null !== $this->sipServerUrl) {
            $res['SipServerUrl'] = $this->sipServerUrl;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userKey) {
            $res['UserKey'] = $this->userKey;
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
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
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
        if (isset($map['SipServerUrl'])) {
            $model->sipServerUrl = $map['SipServerUrl'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserKey'])) {
            $model->userKey = $map['UserKey'];
        }
        if (isset($map['WorkMode'])) {
            $model->workMode = $map['WorkMode'];
        }

        return $model;
    }
}
