<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayTopVideosResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayTopVideosResponseBody\topPlayVideos\topPlayVideoStatis;

class topPlayVideos extends Model
{
    /**
     * @var topPlayVideoStatis[]
     */
    public $topPlayVideoStatis;
    protected $_name = [
        'topPlayVideoStatis' => 'TopPlayVideoStatis',
    ];

    public function validate()
    {
        if (\is_array($this->topPlayVideoStatis)) {
            Model::validateArray($this->topPlayVideoStatis);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->topPlayVideoStatis) {
            if (\is_array($this->topPlayVideoStatis)) {
                $res['TopPlayVideoStatis'] = [];
                $n1 = 0;
                foreach ($this->topPlayVideoStatis as $item1) {
                    $res['TopPlayVideoStatis'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TopPlayVideoStatis'])) {
            if (!empty($map['TopPlayVideoStatis'])) {
                $model->topPlayVideoStatis = [];
                $n1 = 0;
                foreach ($map['TopPlayVideoStatis'] as $item1) {
                    $model->topPlayVideoStatis[$n1++] = topPlayVideoStatis::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
