<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceStatusDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceStatusDetailResponseBody\result\player;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceStatusDetailResponseBody\result\power;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceStatusDetailResponseBody\result\speaker;

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
        'player' => 'Player',
        'power' => 'Power',
        'speaker' => 'Speaker',
    ];

    public function validate()
    {
        if (null !== $this->player) {
            $this->player->validate();
        }
        if (null !== $this->power) {
            $this->power->validate();
        }
        if (null !== $this->speaker) {
            $this->speaker->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->player) {
            $res['Player'] = null !== $this->player ? $this->player->toArray($noStream) : $this->player;
        }

        if (null !== $this->power) {
            $res['Power'] = null !== $this->power ? $this->power->toArray($noStream) : $this->power;
        }

        if (null !== $this->speaker) {
            $res['Speaker'] = null !== $this->speaker ? $this->speaker->toArray($noStream) : $this->speaker;
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
