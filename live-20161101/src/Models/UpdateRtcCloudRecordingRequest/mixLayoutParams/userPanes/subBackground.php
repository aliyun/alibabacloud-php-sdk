<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\UpdateRtcCloudRecordingRequest\mixLayoutParams\userPanes;

use AlibabaCloud\Tea\Model;

class subBackground extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $renderMode;

    /**
     * @example https://xxxx.com/photos/my-test-pane-picture.png
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'renderMode' => 'RenderMode',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->renderMode) {
            $res['RenderMode'] = $this->renderMode;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subBackground
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RenderMode'])) {
            $model->renderMode = $map['RenderMode'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
