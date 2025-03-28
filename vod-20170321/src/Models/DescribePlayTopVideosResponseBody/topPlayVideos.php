<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayTopVideosResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayTopVideosResponseBody\topPlayVideos\topPlayVideoStatis;
use AlibabaCloud\Tea\Model;

class topPlayVideos extends Model
{
    /**
     * @var topPlayVideoStatis[]
     */
    public $topPlayVideoStatis;
    protected $_name = [
        'topPlayVideoStatis' => 'TopPlayVideoStatis',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->topPlayVideoStatis) {
            $res['TopPlayVideoStatis'] = [];
            if (null !== $this->topPlayVideoStatis && \is_array($this->topPlayVideoStatis)) {
                $n = 0;
                foreach ($this->topPlayVideoStatis as $item) {
                    $res['TopPlayVideoStatis'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topPlayVideos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TopPlayVideoStatis'])) {
            if (!empty($map['TopPlayVideoStatis'])) {
                $model->topPlayVideoStatis = [];
                $n = 0;
                foreach ($map['TopPlayVideoStatis'] as $item) {
                    $model->topPlayVideoStatis[$n++] = null !== $item ? topPlayVideoStatis::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
