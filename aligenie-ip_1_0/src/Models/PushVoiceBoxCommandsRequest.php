<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PushVoiceBoxCommandsRequest\commands;
use AlibabaCloud\Tea\Model;

class PushVoiceBoxCommandsRequest extends Model
{
    /**
     * @var commands[]
     */
    public $commands;

    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $roomNo;
    protected $_name = [
        'commands' => 'Commands',
        'hotelId'  => 'HotelId',
        'roomNo'   => 'RoomNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commands) {
            $res['Commands'] = [];
            if (null !== $this->commands && \is_array($this->commands)) {
                $n = 0;
                foreach ($this->commands as $item) {
                    $res['Commands'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->roomNo) {
            $res['RoomNo'] = $this->roomNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushVoiceBoxCommandsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Commands'])) {
            if (!empty($map['Commands'])) {
                $model->commands = [];
                $n               = 0;
                foreach ($map['Commands'] as $item) {
                    $model->commands[$n++] = null !== $item ? commands::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['RoomNo'])) {
            $model->roomNo = $map['RoomNo'];
        }

        return $model;
    }
}
