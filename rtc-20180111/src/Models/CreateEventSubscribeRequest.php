<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class CreateEventSubscribeRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 9qb1****
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @example http://****.com/callback
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @example 123333
     *
     * @var string
     */
    public $channelId;

    /**
     * @description This parameter is required.
     *
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required.
     *
     * @example ChannelEvent
     *
     * @var string[]
     */
    public $events;

    /**
     * @example false
     *
     * @var bool
     */
    public $needCallbackAuth;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example 1
     *
     * @var int
     */
    public $role;

    /**
     * @example user1
     *
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
        'role'             => 'Role',
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
        if (null !== $this->role) {
            $res['Role'] = $this->role;
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
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = $map['Users'];
            }
        }

        return $model;
    }
}
