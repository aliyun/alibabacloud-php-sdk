<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\DeleteChatGroupParticipantsRequest;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 86138***
     *
     * @var string
     */
    public $participantNumber;
    protected $_name = [
        'participantNumber' => 'ParticipantNumber',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->participantNumber) {
            $res['ParticipantNumber'] = $this->participantNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParticipantNumber'])) {
            $model->participantNumber = $map['ParticipantNumber'];
        }

        return $model;
    }
}
