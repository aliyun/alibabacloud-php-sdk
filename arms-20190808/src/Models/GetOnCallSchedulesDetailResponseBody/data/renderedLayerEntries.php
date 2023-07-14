<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetOnCallSchedulesDetailResponseBody\data;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetOnCallSchedulesDetailResponseBody\data\renderedLayerEntries\simpleContact;
use AlibabaCloud\Tea\Model;

class renderedLayerEntries extends Model
{
    /**
     * @description The date from which the scheduled user was supposed to start shift work.
     *
     * @example 2022-10-01
     *
     * @var string
     */
    public $start;

    /**
     * @description The date on which the scheduled user was supposed to complete shift work.
     *
     * @example 2022-10-30
     *
     * @var string
     */
    public $end;

    /**
     * @description The information about the scheduled user.
     *
     * @var simpleContact
     */
    public $simpleContact;
    protected $_name = [
        'start'         => 'Start',
        'end'           => 'End',
        'simpleContact' => 'SimpleContact',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->simpleContact) {
            $res['SimpleContact'] = null !== $this->simpleContact ? $this->simpleContact->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return renderedLayerEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['SimpleContact'])) {
            $model->simpleContact = simpleContact::fromMap($map['SimpleContact']);
        }

        return $model;
    }
}
