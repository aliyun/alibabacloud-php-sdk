<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeRtcMPUEventSubResponseBody;

use AlibabaCloud\Tea\Model;

class subInfo extends Model
{
    /**
     * @description The application ID. You can specify only one application ID.
     *
     * @example yourAppId
     *
     * @var string
     */
    public $appId;

    /**
     * @description The callback URL.
     *
     * @example http://testcallback***.com/callback
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @description The ID of the channel to which mixed-stream relay event callbacks are sent. Multiple channel IDs are separated by commas (,). If this parameter is not returned, mixed-stream relay event callbacks are sent to all channels.
     *
     * @example yourCh1,yourCh2
     *
     * @var string
     */
    public $channelIds;

    /**
     * @description The time when the event callback was fired. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2024-04-09 18:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the subscription.
     *
     * @example Sub-******9799B2C4500******
     *
     * @var string
     */
    public $subId;
    protected $_name = [
        'appId' => 'AppId',
        'callbackUrl' => 'CallbackUrl',
        'channelIds' => 'ChannelIds',
        'createTime' => 'CreateTime',
        'subId' => 'SubId',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->subId) {
            $res['SubId'] = $this->subId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subInfo
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SubId'])) {
            $model->subId = $map['SubId'];
        }

        return $model;
    }
}
