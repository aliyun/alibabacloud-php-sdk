<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class RemoveTerminalsRequest extends Model
{
    /**
     * @description The ID of the application. You can specify only one application ID in each request.
     *
     * This parameter is required.
     *
     * @example aec****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the channel. You can specify only one channel ID in each request.
     *
     * This parameter is required.
     *
     * @example testId
     *
     * @var string
     */
    public $channelId;

    /**
     * @description The IDs of the users that you want to remove.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $terminalIds;
    protected $_name = [
        'appId' => 'AppId',
        'channelId' => 'ChannelId',
        'terminalIds' => 'TerminalIds',
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
        if (null !== $this->terminalIds) {
            $res['TerminalIds'] = $this->terminalIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveTerminalsRequest
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
        if (isset($map['TerminalIds'])) {
            if (!empty($map['TerminalIds'])) {
                $model->terminalIds = $map['TerminalIds'];
            }
        }

        return $model;
    }
}
