<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class UpdateEventSubRequest extends Model
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
     * @description The callback URL. For more information about the callback content, see CreateEventSub.
     *
     * This parameter is required.
     *
     * @example http://****.com/callback
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @description The channel ID. You can call the [ListEventSub](https://help.aliyun.com/document_detail/2848210.html) operation to query the channel ID.
     *
     * >
     *
     *   This parameter is required if you specify the Users.N parameter.
     *
     *   If you set this parameter to \\* or do not specify this parameter, all channels are subscribed to.
     *
     *   You can create up to 20 subscriptions for each application ID.
     *
     * @example 123333
     *
     * @var string
     */
    public $channelId;

    /**
     * @description The type of the events to which you want to subscribe.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $events;

    /**
     * @description The subscription ID. You can obtain the ID from the response to the [CreateEventSub](https://help.aliyun.com/document_detail/2848209.html) operation.
     *
     * This parameter is required.
     *
     * @example ad53276431c****
     *
     * @var string
     */
    public $subscribeId;

    /**
     * @description The user whose events you want to subscribe to.
     *
     * @var string[]
     */
    public $users;
    protected $_name = [
        'appId' => 'AppId',
        'callbackUrl' => 'CallbackUrl',
        'channelId' => 'ChannelId',
        'events' => 'Events',
        'subscribeId' => 'SubscribeId',
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
        if (null !== $this->subscribeId) {
            $res['SubscribeId'] = $this->subscribeId;
        }
        if (null !== $this->users) {
            $res['Users'] = $this->users;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEventSubRequest
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
        if (isset($map['SubscribeId'])) {
            $model->subscribeId = $map['SubscribeId'];
        }
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = $map['Users'];
            }
        }

        return $model;
    }
}
