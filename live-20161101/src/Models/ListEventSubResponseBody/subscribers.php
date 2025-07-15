<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListEventSubResponseBody;

use AlibabaCloud\Tea\Model;

class subscribers extends Model
{
    /**
     * @description The callback URL.
     *
     * @example http://****.com/callback
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @description The ID of the channel to which you subscribe.
     *
     * @example testmodify
     *
     * @var string
     */
    public $channelId;

    /**
     * @description The time when the subscription was created. The time is displayed in UTC+8. Format: yyyy-MM-dd hh:mm:ss.
     *
     * @example 2023-08-18 10:14:49
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The type of the event. Valid values:
     *
     *   ChannelEvent: channel event. For example, the channel is opened or closed.
     *   UserEvent: user event. For example, a user joins or leaves the channel.
     *
     * @var string[]
     */
    public $events;

    /**
     * @description The time when the subscription was modified. The time is displayed in UTC+8. Format: yyyy-MM-dd hh:mm:ss.
     *
     * @example 2023-08-18 10:14:49
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The role of the user whose events are returned. Valid values:
     *
     *   1: streamer
     *   2: viewer
     *
     * An empty value or a value other than 1 and 2 indicates that events of all users in the channel are returned.
     *
     * >  This parameter is deprecated. When you create a subscription, this parameter is no longer supported.
     *
     * @example 1
     *
     * @deprecated
     *
     * @var int
     */
    public $roles;

    /**
     * @description The ID of the event.
     *
     * @example 09be0d2254cb5a89f4cbd86403ec****
     *
     * @var string
     */
    public $subId;

    /**
     * @description The user whose events are returned. We recommend that you use either this parameter or Roles.
     *
     * @var string[]
     */
    public $users;
    protected $_name = [
        'callbackUrl' => 'CallbackUrl',
        'channelId' => 'ChannelId',
        'createTime' => 'CreateTime',
        'events' => 'Events',
        'modifyTime' => 'ModifyTime',
        'roles' => 'Roles',
        'subId' => 'SubId',
        'users' => 'Users',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->events) {
            $res['Events'] = $this->events;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->roles) {
            $res['Roles'] = $this->roles;
        }
        if (null !== $this->subId) {
            $res['SubId'] = $this->subId;
        }
        if (null !== $this->users) {
            $res['Users'] = $this->users;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscribers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Events'])) {
            if (!empty($map['Events'])) {
                $model->events = $map['Events'];
            }
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Roles'])) {
            $model->roles = $map['Roles'];
        }
        if (isset($map['SubId'])) {
            $model->subId = $map['SubId'];
        }
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = $map['Users'];
            }
        }

        return $model;
    }
}
