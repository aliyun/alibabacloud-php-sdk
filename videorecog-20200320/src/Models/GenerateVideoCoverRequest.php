<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models;

use AlibabaCloud\Dara\Model;

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
        'isGif' => 'IsGif',
        'videoUrl' => 'VideoUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
