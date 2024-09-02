<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\output;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\output\videoCaptionResult\videoCaptions;
use AlibabaCloud\Tea\Model;

class videoCaptionResult extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $generateFinished;

    /**
     * @var videoCaptions[]
     */
    public $videoCaptions;
    protected $_name = [
        'generateFinished' => 'generateFinished',
        'videoCaptions'    => 'videoCaptions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->generateFinished) {
            $res['generateFinished'] = $this->generateFinished;
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
     * @return videoCaptionResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['generateFinished'])) {
            $model->generateFinished = $map['generateFinished'];
        }
        if (isset($map['videoCaptions'])) {
            if (!empty($map['videoCaptions'])) {
                $model->videoCaptions = [];
                $n                    = 0;
                foreach ($map['videoCaptions'] as $item) {
                    $model->videoCaptions[$n++] = null !== $item ? videoCaptions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
