<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class CreateEventSubscribeRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string[]
     */
    public $events;

    /**
     * @var bool
     */
    public $needCallbackAuth;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string[]
     */
    public $users;
    protected $_name = [
        'appId'            => 'AppId',
        'callbackUrl'      => 'CallbackUrl',
        'channelId'        => 'ChannelId',
        'clientToken'      => 'ClientToken',
        'events'           => 'Events',
        'needCallbackAuth' => 'NeedCallbackAuth',
        'ownerId'          => 'OwnerId',
        'users'            => 'Users',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->events) {
            $res['Events'] = $this->events;
        }
        if (null !== $this->needCallbackAuth) {
            $res['NeedCallbackAuth'] = $this->needCallbackAuth;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->users) {
            $res['Users'] = $this->users;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEventSubscribeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Events'])) {
            if (!empty($map['Events'])) {
                $model->events = $map['Events'];
            }
        }
        if (isset($map['NeedCallbackAuth'])) {
            $model->needCallbackAuth = $map['NeedCallbackAuth'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = $map['Users'];
            }
        }

        return $model;
    }
}
