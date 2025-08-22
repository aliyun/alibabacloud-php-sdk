<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetOnCallSchedulesDetailResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetOnCallSchedulesDetailResponseBody\data\renderedFinnalEntries\simpleContact;

class renderedFinnalEntries extends Model
{
    /**
     * @var string
     */
    public $end;

    /**
     * @var simpleContact
     */
    public $simpleContact;

    /**
     * @var string
     */
    public $start;
    protected $_name = [
        'end' => 'End',
        'simpleContact' => 'SimpleContact',
        'start' => 'Start',
    ];

    public function validate()
    {
        if (null !== $this->simpleContact) {
            $this->simpleContact->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }

        if (null !== $this->simpleContact) {
            $res['SimpleContact'] = null !== $this->simpleContact ? $this->simpleContact->toArray($noStream) : $this->simpleContact;
        }

        if (null !== $this->start) {
            $res['Start'] = $this->start;
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
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }

        if (isset($map['SimpleContact'])) {
            $model->simpleContact = simpleContact::fromMap($map['SimpleContact']);
        }

        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
