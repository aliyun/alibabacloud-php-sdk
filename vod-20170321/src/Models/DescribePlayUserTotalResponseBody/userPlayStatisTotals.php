<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponseBody\userPlayStatisTotals\userPlayStatisTotal;
use AlibabaCloud\Tea\Model;

class userPlayStatisTotals extends Model
{
    /**
     * @var userPlayStatisTotal[]
     */
    public $userPlayStatisTotal;
    protected $_name = [
        'userPlayStatisTotal' => 'UserPlayStatisTotal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userPlayStatisTotal) {
            $res['UserPlayStatisTotal'] = [];
            if (null !== $this->userPlayStatisTotal && \is_array($this->userPlayStatisTotal)) {
                $n = 0;
                foreach ($this->userPlayStatisTotal as $item) {
                    $res['UserPlayStatisTotal'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userPlayStatisTotals
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserPlayStatisTotal'])) {
            if (!empty($map['UserPlayStatisTotal'])) {
                $model->userPlayStatisTotal = [];
                $n                          = 0;
                foreach ($map['UserPlayStatisTotal'] as $item) {
                    $model->userPlayStatisTotal[$n++] = null !== $item ? userPlayStatisTotal::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
