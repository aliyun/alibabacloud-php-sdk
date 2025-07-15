<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DeleteChannelRequest extends Model
{
    /**
     * @description The application ID. You can specify only one application ID.
     *
     * @example eo85****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The channel ID. You can specify only one channel ID.
     *
     * @example testid
     *
     * @var string
     */
    public $channelId;
    protected $_name = [
        'appId' => 'AppId',
        'channelId' => 'ChannelId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteChannelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        return $model;
    }
}
