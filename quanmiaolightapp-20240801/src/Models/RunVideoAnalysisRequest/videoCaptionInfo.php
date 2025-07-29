<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisRequest;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisRequest\videoCaptionInfo\videoCaptions;
use AlibabaCloud\Tea\Model;

class videoCaptionInfo extends Model
{
    /**
     * @example oss:// | http://
     *
     * @var string
     */
    public $videoCaptionFileUrl;

    /**
     * @var videoCaptions[]
     */
    public $videoCaptions;
    protected $_name = [
        'videoCaptionFileUrl' => 'videoCaptionFileUrl',
        'videoCaptions' => 'videoCaptions',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoCaptionFileUrl) {
            $res['videoCaptionFileUrl'] = $this->videoCaptionFileUrl;
        }
        if (null !== $this->videoCaptions) {
            $res['videoCaptions'] = [];
            if (null !== $this->videoCaptions && \is_array($this->videoCaptions)) {
                $n = 0;
                foreach ($this->videoCaptions as $item) {
                    $res['videoCaptions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoCaptionInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['videoCaptionFileUrl'])) {
            $model->videoCaptionFileUrl = $map['videoCaptionFileUrl'];
        }
        if (isset($map['videoCaptions'])) {
            if (!empty($map['videoCaptions'])) {
                $model->videoCaptions = [];
                $n = 0;
                foreach ($map['videoCaptions'] as $item) {
                    $model->videoCaptions[$n++] = null !== $item ? videoCaptions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
