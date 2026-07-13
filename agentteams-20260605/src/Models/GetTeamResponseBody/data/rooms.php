<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetTeamResponseBody\data;

use AlibabaCloud\Dara\Model;

class rooms extends Model
{
    /**
     * @var string
     */
    public $roomId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'roomId' => 'RoomId',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
