<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateAgentRequest;

use AlibabaCloud\Tea\Model;

class voiceChatConfig extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $chatMode;

    /**
     * @example 2
     *
     * @var int
     */
    public $interruptMode;
    protected $_name = [
        'chatMode' => 'ChatMode',
        'interruptMode' => 'InterruptMode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->chatMode) {
            $res['ChatMode'] = $this->chatMode;
        }
        if (null !== $this->interruptMode) {
            $res['InterruptMode'] = $this->interruptMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return voiceChatConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChatMode'])) {
            $model->chatMode = $map['ChatMode'];
        }
        if (isset($map['InterruptMode'])) {
            $model->interruptMode = $map['InterruptMode'];
        }

        return $model;
    }
}
