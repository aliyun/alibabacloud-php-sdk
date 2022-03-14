<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models;

use AlibabaCloud\Tea\Model;

class GenerateVideoCoverRequest extends Model
{
    /**
     * @var bool
     */
    public $isGif;

    /**
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'isGif'    => 'IsGif',
        'videoUrl' => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isGif) {
            $res['IsGif'] = $this->isGif;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateVideoCoverRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsGif'])) {
            $model->isGif = $map['IsGif'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
