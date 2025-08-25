<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models\GenerateVideoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $videoCoverUrl;

    /**
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'videoCoverUrl' => 'VideoCoverUrl',
        'videoUrl' => 'VideoUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->videoCoverUrl) {
            $res['VideoCoverUrl'] = $this->videoCoverUrl;
        }

        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
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
        if (isset($map['VideoCoverUrl'])) {
            $model->videoCoverUrl = $map['VideoCoverUrl'];
        }

        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
