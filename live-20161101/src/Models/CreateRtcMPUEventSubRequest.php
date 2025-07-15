<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateRtcMPUEventSubRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * > The ID can be up to 64 characters in length and can contain letters, digits, underscores, and hyphens (-).
     *
     * This parameter is required.
     *
     * @example yourAppId
     *
     * @var string
     */
    public $appId;

    /**
     * @description The callback URL.
     *
     * > The callback URL can be up to 2,083 characters in length. You can use headers such as HTTP and HTTPS in callback URLs. The URL can contain letters, digits, and the following special characters: - _ ? % = # . / +
     *
     * This parameter is required.
     *
     * @example http://****.com/callback
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @description The ID of the channel to which you want to send mixed-stream relay event callbacks. Separate multiple channel IDs with commas (,).
     *
     * >
     *
     *   If you leave this parameter empty, you are subscribed to mixed-stream relay events of all channels in the application.
     *
     *   You cannot specify duplicate channel IDs. You can specify up to 20 channel IDs in each call.
     *
     *   The ID can be up to 64 characters in length and contain letters, digits, underscores (_), and hyphens (-).
     *
     * @example yourChannelIds
     *
     * @var string
     */
    public $channelIds;
    protected $_name = [
        'appId' => 'AppId',
        'callbackUrl' => 'CallbackUrl',
        'channelIds' => 'ChannelIds',
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
        if (null !== $this->channelIds) {
            $res['ChannelIds'] = $this->channelIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRtcMPUEventSubRequest
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
        if (isset($map['ChannelIds'])) {
            $model->channelIds = $map['ChannelIds'];
        }

        return $model;
    }
}
