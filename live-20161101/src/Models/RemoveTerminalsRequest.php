<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class RemoveTerminalsRequest extends Model
{
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
        'appId' => 'AppId',
        'channelId' => 'ChannelId',
        'terminalIds' => 'TerminalIds',
    ];

    public function validate()
    {
        if (\is_array($this->terminalIds)) {
            Model::validateArray($this->terminalIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->terminalIds) {
            if (\is_array($this->terminalIds)) {
                $res['TerminalIds'] = [];
                $n1 = 0;
                foreach ($this->terminalIds as $item1) {
                    $res['TerminalIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['TerminalIds'])) {
            if (!empty($map['TerminalIds'])) {
                $model->terminalIds = [];
                $n1 = 0;
                foreach ($map['TerminalIds'] as $item1) {
                    $model->terminalIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
