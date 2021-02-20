<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\RemoveParticipantsResponseBody;

use AlibabaCloud\SDK\Rtc\V20180111\Models\RemoveParticipantsResponseBody\participants\participant;
use AlibabaCloud\Tea\Model;

class participants extends Model
{
    /**
     * @var participant[]
     */
    public $participant;
    protected $_name = [
        'participant' => 'Participant',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->participant) {
            $res['Participant'] = [];
            if (null !== $this->participant && \is_array($this->participant)) {
                $n = 0;
                foreach ($this->participant as $item) {
                    $res['Participant'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return participants
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Participant'])) {
            if (!empty($map['Participant'])) {
                $model->participant = [];
                $n                  = 0;
                foreach ($map['Participant'] as $item) {
                    $model->participant[$n++] = null !== $item ? participant::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
