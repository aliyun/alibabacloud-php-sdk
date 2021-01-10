<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryEditingJobListResponseBody\jobList\job\editingConfig\editing\timeline\trackList\track\clips\clip;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryEditingJobListResponseBody\jobList\job\editingConfig\editing\timeline\trackList\track\clips\clip\clipsConfig\clipsConfigVideo;
use AlibabaCloud\Tea\Model;

class clipsConfig extends Model
{
    /**
     * @var clipsConfigVideo
     */
    public $clipsConfigVideo;
    protected $_name = [
        'clipsConfigVideo' => 'ClipsConfigVideo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clipsConfigVideo) {
            $res['ClipsConfigVideo'] = null !== $this->clipsConfigVideo ? $this->clipsConfigVideo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clipsConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClipsConfigVideo'])) {
            $model->clipsConfigVideo = clipsConfigVideo::fromMap($map['ClipsConfigVideo']);
        }

        return $model;
    }
}
