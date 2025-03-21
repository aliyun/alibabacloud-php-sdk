<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class StopChannelRequest extends Model
{
    /**
     * @description The name of the channel.
     *
     * This parameter is required.
     *
     * @example MyChannel
     *
     * @var string
     */
    public $channelName;
    protected $_name = [
        'channelName' => 'ChannelName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopChannelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }

        return $model;
    }
}
