<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data;

use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frameSummarys;
use AlibabaCloud\Tea\Model;

class frameResult extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $frameNum;

    /**
     * @var frameSummarys[]
     */
    public $frameSummarys;

    /**
     * @var frames[]
     */
    public $frames;
    protected $_name = [
        'frameNum'      => 'FrameNum',
        'frameSummarys' => 'FrameSummarys',
        'frames'        => 'Frames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->frameNum) {
            $res['FrameNum'] = $this->frameNum;
        }
        if (null !== $this->frameSummarys) {
            $res['FrameSummarys'] = [];
            if (null !== $this->frameSummarys && \is_array($this->frameSummarys)) {
                $n = 0;
                foreach ($this->frameSummarys as $item) {
                    $res['FrameSummarys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->frames) {
            $res['Frames'] = [];
            if (null !== $this->frames && \is_array($this->frames)) {
                $n = 0;
                foreach ($this->frames as $item) {
                    $res['Frames'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return frameResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FrameNum'])) {
            $model->frameNum = $map['FrameNum'];
        }
        if (isset($map['FrameSummarys'])) {
            if (!empty($map['FrameSummarys'])) {
                $model->frameSummarys = [];
                $n                    = 0;
                foreach ($map['FrameSummarys'] as $item) {
                    $model->frameSummarys[$n++] = null !== $item ? frameSummarys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Frames'])) {
            if (!empty($map['Frames'])) {
                $model->frames = [];
                $n             = 0;
                foreach ($map['Frames'] as $item) {
                    $model->frames[$n++] = null !== $item ? frames::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
