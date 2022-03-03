<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models;

use AlibabaCloud\Tea\Model;

class RecognizeVideoCastCrewListShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $paramsShrink;

    /**
     * @var string
     */
    public $registerUrl;

    /**
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'paramsShrink' => 'Params',
        'registerUrl'  => 'RegisterUrl',
        'videoUrl'     => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paramsShrink) {
            $res['Params'] = $this->paramsShrink;
        }
        if (null !== $this->registerUrl) {
            $res['RegisterUrl'] = $this->registerUrl;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeVideoCastCrewListShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Params'])) {
            $model->paramsShrink = $map['Params'];
        }
        if (isset($map['RegisterUrl'])) {
            $model->registerUrl = $map['RegisterUrl'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
