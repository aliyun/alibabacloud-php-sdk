<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceStatusDetailResponseBody;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceStatusDetailResponseBody\result\player;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceStatusDetailResponseBody\result\power;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceStatusDetailResponseBody\result\speaker;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var player
     */
    public $player;

    /**
     * @var power
     */
    public $power;

    /**
     * @var speaker
     */
    public $speaker;
    protected $_name = [
        'player'  => 'Player',
        'power'   => 'Power',
        'speaker' => 'Speaker',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->player) {
            $res['Player'] = null !== $this->player ? $this->player->toMap() : null;
        }
        if (null !== $this->power) {
            $res['Power'] = null !== $this->power ? $this->power->toMap() : null;
        }
        if (null !== $this->speaker) {
            $res['Speaker'] = null !== $this->speaker ? $this->speaker->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Player'])) {
            $model->player = player::fromMap($map['Player']);
        }
        if (isset($map['Power'])) {
            $model->power = power::fromMap($map['Power']);
        }
        if (isset($map['Speaker'])) {
            $model->speaker = speaker::fromMap($map['Speaker']);
        }

        return $model;
    }
}
