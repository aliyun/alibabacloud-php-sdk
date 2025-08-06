<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserAvgResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserAvgResponseBody\userPlayStatisAvgs\userPlayStatisAvg;

class userPlayStatisAvgs extends Model
{
    /**
     * @var userPlayStatisAvg[]
     */
    public $userPlayStatisAvg;
    protected $_name = [
        'userPlayStatisAvg' => 'UserPlayStatisAvg',
    ];

    public function validate()
    {
        if (\is_array($this->userPlayStatisAvg)) {
            Model::validateArray($this->userPlayStatisAvg);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userPlayStatisAvg) {
            if (\is_array($this->userPlayStatisAvg)) {
                $res['UserPlayStatisAvg'] = [];
                $n1 = 0;
                foreach ($this->userPlayStatisAvg as $item1) {
                    $res['UserPlayStatisAvg'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['UserPlayStatisAvg'])) {
            if (!empty($map['UserPlayStatisAvg'])) {
                $model->userPlayStatisAvg = [];
                $n1 = 0;
                foreach ($map['UserPlayStatisAvg'] as $item1) {
                    $model->userPlayStatisAvg[$n1] = userPlayStatisAvg::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
