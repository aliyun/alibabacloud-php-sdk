<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetOnCallSchedulesDetailResponseBody\data;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetOnCallSchedulesDetailResponseBody\data\renderedSubstitudeEntries\simpleContact;
use AlibabaCloud\Tea\Model;

class renderedSubstitudeEntries extends Model
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
        'end'           => 'End',
        'simpleContact' => 'SimpleContact',
        'start'         => 'Start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->simpleContact) {
            $res['SimpleContact'] = null !== $this->simpleContact ? $this->simpleContact->toMap() : null;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return renderedSubstitudeEntries
     */
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
