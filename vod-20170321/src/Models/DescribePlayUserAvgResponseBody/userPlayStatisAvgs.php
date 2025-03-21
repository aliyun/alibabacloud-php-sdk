<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserAvgResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserAvgResponseBody\userPlayStatisAvgs\userPlayStatisAvg;
use AlibabaCloud\Tea\Model;

class userPlayStatisAvgs extends Model
{
    /**
     * @var userPlayStatisAvg[]
     */
    public $userPlayStatisAvg;
    protected $_name = [
        'userPlayStatisAvg' => 'UserPlayStatisAvg',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->userPlayStatisAvg) {
            $res['UserPlayStatisAvg'] = [];
            if (null !== $this->userPlayStatisAvg && \is_array($this->userPlayStatisAvg)) {
                $n = 0;
                foreach ($this->userPlayStatisAvg as $item) {
                    $res['UserPlayStatisAvg'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userPlayStatisAvgs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserPlayStatisAvg'])) {
            if (!empty($map['UserPlayStatisAvg'])) {
                $model->userPlayStatisAvg = [];
                $n = 0;
                foreach ($map['UserPlayStatisAvg'] as $item) {
                    $model->userPlayStatisAvg[$n++] = null !== $item ? userPlayStatisAvg::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
