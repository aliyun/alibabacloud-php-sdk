<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayVideoStatisResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayVideoStatisResponseBody\videoPlayStatisDetails\videoPlayStatisDetail;

class videoPlayStatisDetails extends Model
{
    /**
     * @var videoPlayStatisDetail[]
     */
    public $videoPlayStatisDetail;
    protected $_name = [
        'videoPlayStatisDetail' => 'VideoPlayStatisDetail',
    ];

    public function validate()
    {
        if (\is_array($this->videoPlayStatisDetail)) {
            Model::validateArray($this->videoPlayStatisDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->videoPlayStatisDetail) {
            if (\is_array($this->videoPlayStatisDetail)) {
                $res['VideoPlayStatisDetail'] = [];
                $n1 = 0;
                foreach ($this->videoPlayStatisDetail as $item1) {
                    $res['VideoPlayStatisDetail'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VideoPlayStatisDetail'])) {
            if (!empty($map['VideoPlayStatisDetail'])) {
                $model->videoPlayStatisDetail = [];
                $n1 = 0;
                foreach ($map['VideoPlayStatisDetail'] as $item1) {
                    $model->videoPlayStatisDetail[$n1++] = videoPlayStatisDetail::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
