<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data;

use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames;
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
     * @var frames[]
     */
    public $frames;
    protected $_name = [
        'frameNum' => 'FrameNum',
        'frames'   => 'Frames',
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
