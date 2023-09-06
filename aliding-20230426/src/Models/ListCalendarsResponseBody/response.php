<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListCalendarsResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\ListCalendarsResponseBody\response\calendars;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calendars) {
            $res['Calendars'] = [];
            if (null !== $this->calendars && \is_array($this->calendars)) {
                $n = 0;
                foreach ($this->calendars as $item) {
                    $res['Calendars'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return response
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Calendars'])) {
            if (!empty($map['Calendars'])) {
                $model->calendars = [];
                $n                = 0;
                foreach ($map['Calendars'] as $item) {
                    $model->calendars[$n++] = null !== $item ? calendars::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
