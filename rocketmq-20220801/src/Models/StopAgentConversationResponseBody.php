<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class StopAgentConversationResponseBody extends Model
{
    /**
     * @var bool
     */
    public $stopped;
    protected $_name = [
        'stopped' => 'stopped',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->stopped) {
            $res['stopped'] = $this->stopped;
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
        if (isset($map['stopped'])) {
            $model->stopped = $map['stopped'];
        }

        return $model;
    }
}
