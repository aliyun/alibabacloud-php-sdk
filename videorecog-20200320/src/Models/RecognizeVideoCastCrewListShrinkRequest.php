<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models;

use AlibabaCloud\Dara\Model;

class RecognizeVideoCastCrewListShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $paramsShrink;

    /**
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'paramsShrink' => 'Params',
        'videoUrl' => 'VideoUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->paramsShrink) {
            $res['Params'] = $this->paramsShrink;
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
        if (isset($map['Params'])) {
            $model->paramsShrink = $map['Params'];
        }

        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
