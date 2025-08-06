<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoListResponseBody\videoList\video;

class videoList extends Model
{
    /**
     * @var video[]
     */
    public $video;
    protected $_name = [
        'video' => 'Video',
    ];

    public function validate()
    {
        if (\is_array($this->video)) {
            Model::validateArray($this->video);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->video) {
            if (\is_array($this->video)) {
                $res['Video'] = [];
                $n1 = 0;
                foreach ($this->video as $item1) {
                    $res['Video'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Video'])) {
            if (!empty($map['Video'])) {
                $model->video = [];
                $n1 = 0;
                foreach ($map['Video'] as $item1) {
                    $model->video[$n1] = video::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
