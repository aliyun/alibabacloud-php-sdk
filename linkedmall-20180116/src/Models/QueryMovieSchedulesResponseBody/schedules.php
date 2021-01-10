<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMovieSchedulesResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMovieSchedulesResponseBody\schedules\schedule;
use AlibabaCloud\Tea\Model;

class schedules extends Model
{
    /**
     * @var schedule[]
     */
    public $schedule;
    protected $_name = [
        'schedule' => 'Schedule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schedule) {
            $res['Schedule'] = [];
            if (null !== $this->schedule && \is_array($this->schedule)) {
                $n = 0;
                foreach ($this->schedule as $item) {
                    $res['Schedule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schedules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Schedule'])) {
            if (!empty($map['Schedule'])) {
                $model->schedule = [];
                $n               = 0;
                foreach ($map['Schedule'] as $item) {
                    $model->schedule[$n++] = null !== $item ? schedule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
