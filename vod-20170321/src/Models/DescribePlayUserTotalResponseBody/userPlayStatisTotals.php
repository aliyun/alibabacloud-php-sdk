<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponseBody\userPlayStatisTotals\userPlayStatisTotal;

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
        if (\is_array($this->userPlayStatisTotal)) {
            Model::validateArray($this->userPlayStatisTotal);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userPlayStatisTotal) {
            if (\is_array($this->userPlayStatisTotal)) {
                $res['UserPlayStatisTotal'] = [];
                $n1 = 0;
                foreach ($this->userPlayStatisTotal as $item1) {
                    $res['UserPlayStatisTotal'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['UserPlayStatisTotal'])) {
            if (!empty($map['UserPlayStatisTotal'])) {
                $model->userPlayStatisTotal = [];
                $n1 = 0;
                foreach ($map['UserPlayStatisTotal'] as $item1) {
                    $model->userPlayStatisTotal[$n1++] = userPlayStatisTotal::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
