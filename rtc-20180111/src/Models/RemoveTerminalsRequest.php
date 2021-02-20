<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class RemoveTerminalsRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $showLog;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string[]
     */
    public $terminalIds;
    protected $_name = [
        'ownerId'     => 'OwnerId',
        'showLog'     => 'ShowLog',
        'appId'       => 'AppId',
        'channelId'   => 'ChannelId',
        'terminalIds' => 'TerminalIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->showLog) {
            $res['ShowLog'] = $this->showLog;
        }
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ShowLog'])) {
            $model->showLog = $map['ShowLog'];
        }
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
