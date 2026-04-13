<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest\voiceChatConfig;

use AlibabaCloud\Dara\Model;

class backChannelConfig extends Model
{
    /**
     * @var bool
     */
    public $userTurnEnd;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'userTurnEnd' => 'UserTurnEnd',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userTurnEnd) {
            $res['UserTurnEnd'] = $this->userTurnEnd;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['UserTurnEnd'])) {
            $model->userTurnEnd = $map['UserTurnEnd'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
