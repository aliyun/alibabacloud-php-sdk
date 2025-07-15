<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody\MPUTasks\transcodeParams;

use AlibabaCloud\Tea\Model;

class background extends Model
{
    /**
     * @description The display mode. Valid values:
     *
     *   0: proportionally scales the video or background image to fit the pane. Black bars are added to fill the extra space.
     *   1 (default): crops the video or background image to fit the pane.
     *
     * @example 1
     *
     * @var string
     */
    public $renderMode;

    /**
     * @description The URL of the global background image.
     *
     * @example yourImageUrl
     *
     * @var string
     */
    public $URL;
    protected $_name = [
        'renderMode' => 'RenderMode',
        'URL' => 'URL',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->renderMode) {
            $res['RenderMode'] = $this->renderMode;
        }
        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return background
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RenderMode'])) {
            $model->renderMode = $map['RenderMode'];
        }
        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }

        return $model;
    }
}
