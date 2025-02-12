<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelResponseBody\channel;

class DescribeChannelResponseBody extends Model
{
    /**
     * @var channel
     */
    public $channel;
    /**
     * @var bool
     */
    public $channelExist;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'channel'      => 'Channel',
        'channelExist' => 'ChannelExist',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->channel) {
            $this->channel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channel) {
            $res['Channel'] = null !== $this->channel ? $this->channel->toArray($noStream) : $this->channel;
        }

        if (null !== $this->channelExist) {
            $res['ChannelExist'] = $this->channelExist;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Channel'])) {
            $model->channel = channel::fromMap($map['Channel']);
        }

        if (isset($map['ChannelExist'])) {
            $model->channelExist = $map['ChannelExist'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
