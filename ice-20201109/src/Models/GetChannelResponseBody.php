<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetChannelResponseBody extends Model
{
    /**
     * @description The channel information.
     *
     * @var ChannelAssemblyChannel
     */
    public $channel;

    /**
     * @description **Request ID**
     *
     * @example xxx-xxxx-xxxxx-xxxx
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'channel'   => 'Channel',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channel) {
            $res['Channel'] = null !== $this->channel ? $this->channel->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetChannelResponseBody
     */
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
