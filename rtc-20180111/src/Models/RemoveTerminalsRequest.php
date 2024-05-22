<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class RemoveTerminalsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example yourAppId
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @example yourChannelId
     *
     * @var string
     */
    public $channelId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description This parameter is required.
     *
     * @example 1811xxxx
     *
     * @var string[]
     */
    public $terminalIds;
    protected $_name = [
        'appId'       => 'AppId',
        'channelId'   => 'ChannelId',
        'ownerId'     => 'OwnerId',
        'terminalIds' => 'TerminalIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['TerminalIds'])) {
            if (!empty($map['TerminalIds'])) {
                $model->terminalIds = $map['TerminalIds'];
            }
        }

        return $model;
    }
}
