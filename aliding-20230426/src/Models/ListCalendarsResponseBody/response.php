<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListCalendarsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListCalendarsResponseBody\response\calendars;

class response extends Model
{
    /**
     * @var calendars[]
     */
    public $calendars;
    protected $_name = [
        'calendars' => 'Calendars',
    ];

    public function validate()
    {
        if (\is_array($this->calendars)) {
            Model::validateArray($this->calendars);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->calendars) {
            if (\is_array($this->calendars)) {
                $res['Calendars'] = [];
                $n1 = 0;
                foreach ($this->calendars as $item1) {
                    $res['Calendars'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Calendars'])) {
            if (!empty($map['Calendars'])) {
                $model->calendars = [];
                $n1 = 0;
                foreach ($map['Calendars'] as $item1) {
                    $model->calendars[$n1++] = calendars::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
