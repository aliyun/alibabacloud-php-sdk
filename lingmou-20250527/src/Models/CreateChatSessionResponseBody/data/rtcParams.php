<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models\CreateChatSessionResponseBody\data;

use AlibabaCloud\Dara\Model;

class rtcParams extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $avatarUserId;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $clientUserId;

    /**
     * @var string
     */
    public $gslb;

    /**
     * @var string
     */
    public $nonce;

    /**
     * @var string
     */
    public $serverUserId;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'appId' => 'appId',
        'avatarUserId' => 'avatarUserId',
        'channel' => 'channel',
        'clientUserId' => 'clientUserId',
        'gslb' => 'gslb',
        'nonce' => 'nonce',
        'serverUserId' => 'serverUserId',
        'timestamp' => 'timestamp',
        'token' => 'token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->avatarUserId) {
            $res['avatarUserId'] = $this->avatarUserId;
        }

        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }

        if (null !== $this->clientUserId) {
            $res['clientUserId'] = $this->clientUserId;
        }

        if (null !== $this->gslb) {
            $res['gslb'] = $this->gslb;
        }

        if (null !== $this->nonce) {
            $res['nonce'] = $this->nonce;
        }

        if (null !== $this->serverUserId) {
            $res['serverUserId'] = $this->serverUserId;
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }

        if (null !== $this->token) {
            $res['token'] = $this->token;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['avatarUserId'])) {
            $model->avatarUserId = $map['avatarUserId'];
        }

        if (isset($map['channel'])) {
            $model->channel = $map['channel'];
        }

        if (isset($map['clientUserId'])) {
            $model->clientUserId = $map['clientUserId'];
        }

        if (isset($map['gslb'])) {
            $model->gslb = $map['gslb'];
        }

        if (isset($map['nonce'])) {
            $model->nonce = $map['nonce'];
        }

        if (isset($map['serverUserId'])) {
            $model->serverUserId = $map['serverUserId'];
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}
