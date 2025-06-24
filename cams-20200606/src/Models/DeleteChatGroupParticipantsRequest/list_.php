<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\DeleteChatGroupParticipantsRequest;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $participantNumber;
    protected $_name = [
        'participantNumber' => 'ParticipantNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->participantNumber) {
            $res['ParticipantNumber'] = $this->participantNumber;
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
        if (isset($map['ParticipantNumber'])) {
            $model->participantNumber = $map['ParticipantNumber'];
        }

        return $model;
    }
}
