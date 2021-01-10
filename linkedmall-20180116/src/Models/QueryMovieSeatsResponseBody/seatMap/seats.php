<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMovieSeatsResponseBody\seatMap;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMovieSeatsResponseBody\seatMap\seats\seat;
use AlibabaCloud\Tea\Model;

class seats extends Model
{
    /**
     * @var seat[]
     */
    public $seat;
    protected $_name = [
        'seat' => 'Seat',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->seat) {
            $res['Seat'] = [];
            if (null !== $this->seat && \is_array($this->seat)) {
                $n = 0;
                foreach ($this->seat as $item) {
                    $res['Seat'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return seats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Seat'])) {
            if (!empty($map['Seat'])) {
                $model->seat = [];
                $n           = 0;
                foreach ($map['Seat'] as $item) {
                    $model->seat[$n++] = null !== $item ? seat::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
