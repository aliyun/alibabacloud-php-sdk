<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240118\Models\DigitalHumanLiveBroadcastQACmd;

use AlibabaCloud\Tea\Model;

class history extends Model
{
    /**
     * @var string
     */
    public $bot;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'bot'  => 'bot',
        'user' => 'user',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bot) {
            $res['bot'] = $this->bot;
        }
        if (null !== $this->user) {
            $res['user'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return history
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bot'])) {
            $model->bot = $map['bot'];
        }
        if (isset($map['user'])) {
            $model->user = $map['user'];
        }

        return $model;
    }
}
