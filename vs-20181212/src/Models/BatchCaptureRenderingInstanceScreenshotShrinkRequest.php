<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class BatchCaptureRenderingInstanceScreenshotShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $quality;

    /**
     * @var string
     */
    public $renderingInstanceIdsShrink;
    protected $_name = [
        'quality' => 'Quality',
        'renderingInstanceIdsShrink' => 'RenderingInstanceIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->quality) {
            $res['Quality'] = $this->quality;
        }

        if (null !== $this->renderingInstanceIdsShrink) {
            $res['RenderingInstanceIds'] = $this->renderingInstanceIdsShrink;
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
        if (isset($map['Quality'])) {
            $model->quality = $map['Quality'];
        }

        if (isset($map['RenderingInstanceIds'])) {
            $model->renderingInstanceIdsShrink = $map['RenderingInstanceIds'];
        }

        return $model;
    }
}
