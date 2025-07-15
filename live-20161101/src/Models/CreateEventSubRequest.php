<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateEventSubRequest extends Model
{
    /**
     * @description The application ID.
     *
     * This parameter is required.
     *
     * @example 9qb1****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The callback URL. For more information about the content of the messages that are sent to the callback URL, see the Callback section in this topic.
     *
     * This parameter is required.
     *
     * @example http://****.com/callback
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @description The channel ID. You can call the [ListEventSub](https://help.aliyun.com/document_detail/2628135.html) operation to query the channel ID.
     *
     * >
     *
     *   This parameter is required if you specify the Users.N parameter.
     *
     *   If you set this parameter to \\* or do not specify this parameter, all channels are subscribed to.
     *
     *   Each application ID allows only one all-channel subscription.
     *
     * @example 123333
     *
     * @var string
     */
    public $channelId;

    /**
     * @description Subscribe to events.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $events;

    /**
     * @description The user whose events you want to subscribe to. If you leave this parameter empty, the events of all users in the channel are subscribed to, including the events of the streamer and viewers. Specify this parameter in the following format:
     *
     * Users.1=****
     * Users.2=****
     * ......
     *
     * @var string[]
     */
    public $users;
    protected $_name = [
        'appId' => 'AppId',
        'callbackUrl' => 'CallbackUrl',
        'channelId' => 'ChannelId',
        'events' => 'Events',
        'users' => 'Users',
    ];

    public function validate() {}

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
        if (null !== $this->events) {
            $res['Events'] = $this->events;
        }
        if (null !== $this->users) {
            $res['Users'] = $this->users;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEventSubRequest
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
        if (isset($map['Events'])) {
            if (!empty($map['Events'])) {
                $model->events = $map['Events'];
            }
        }
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = $map['Users'];
            }
        }

        return $model;
    }
}
