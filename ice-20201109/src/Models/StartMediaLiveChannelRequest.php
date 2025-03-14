<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class StartMediaLiveChannelRequest extends Model
{
    /**
     * @description The ID of the channel.
     *
     * This parameter is required.
     *
     * @example SEGK5KA6KYKAWQQH
     *
     * @var string
     */
    public $channelId;
    protected $_name = [
        'channelId' => 'ChannelId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartMediaLiveChannelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        return $model;
    }
}
