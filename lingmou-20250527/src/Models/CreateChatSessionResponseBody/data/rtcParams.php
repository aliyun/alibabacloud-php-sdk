<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models\CreateChatSessionResponseBody\data;

use AlibabaCloud\Tea\Model;

class rtcParams extends Model
{
    /**
     * @example 895cbf3b
     *
     * @var string
     */
    public $appId;

    /**
     * @example E7enIvjUos
     *
     * @var string
     */
    public $avatarUserId;

    /**
     * @example pPltqR3FovNCK3hNQc8eHUL3Ztq1wY
     *
     * @var string
     */
    public $channel;

    /**
     * @example aw0tqpFlP4
     *
     * @var string
     */
    public $clientUserId;

    /**
     * @example https://gw.rtn.aliyuncs.com
     *
     * @var string
     */
    public $gslb;

    /**
     * @example f8b0ef02c5da778f4488e2470c
     *
     * @var string
     */
    public $nonce;

    /**
     * @example YzZtSQP8QX
     *
     * @var string
     */
    public $serverUserId;

    /**
     * @example 1560588594
     *
     * @var int
     */
    public $timestamp;

    /**
     * @example PtGgv2dM9F8tEuAtda50c0VNNFjn0WUbyTDRPa1im4cUBEcxlo
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return rtcParams
     */
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
