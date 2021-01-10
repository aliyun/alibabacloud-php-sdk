<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\liveResult\liveImages;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\liveResult\liveVideos;
use AlibabaCloud\Tea\Model;

class liveResult extends Model
{
    /**
     * @var liveImages
     */
    public $liveImages;

    /**
     * @var liveVideos
     */
    public $liveVideos;
    protected $_name = [
        'liveImages' => 'LiveImages',
        'liveVideos' => 'LiveVideos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveImages) {
            $res['LiveImages'] = null !== $this->liveImages ? $this->liveImages->toMap() : null;
        }
        if (null !== $this->liveVideos) {
            $res['LiveVideos'] = null !== $this->liveVideos ? $this->liveVideos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveImages'])) {
            $model->liveImages = liveImages::fromMap($map['LiveImages']);
        }
        if (isset($map['LiveVideos'])) {
            $model->liveVideos = liveVideos::fromMap($map['LiveVideos']);
        }

        return $model;
    }
}
