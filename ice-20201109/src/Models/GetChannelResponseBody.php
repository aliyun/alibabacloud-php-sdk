<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class GetChannelResponseBody extends Model
{
    /**
     * @var ChannelAssemblyChannel
     */
    public $channel;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'channel'   => 'Channel',
        'requestId' => 'RequestId',
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
            $model->channel = ChannelAssemblyChannel::fromMap($map['Channel']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
