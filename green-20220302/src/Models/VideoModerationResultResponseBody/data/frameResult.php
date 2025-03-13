<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data;

use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frameSummarys;
use AlibabaCloud\Tea\Model;

class frameResult extends Model
{
    /**
     * @description The number of captured frames that are returned for the video file.
     *
     * @example 10
     *
     * @var int
     */
    public $frameNum;

    /**
     * @description The summary of the labels against which captured frames are matched.
     *
     * @var frameSummarys[]
     */
    public $frameSummarys;

    /**
     * @description The information about the frames that match the labels.
     *
     * @var frames[]
     */
    public $frames;

    /**
     * @description Risk Level.
     *
     * @example high
     *
     * @var string
     */
    public $riskLevel;
    protected $_name = [
        'frameNum'      => 'FrameNum',
        'frameSummarys' => 'FrameSummarys',
        'frames'        => 'Frames',
        'riskLevel'     => 'RiskLevel',
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
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
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
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
