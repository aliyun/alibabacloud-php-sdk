<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frameSummarys;

class frameResult extends Model
{
    /**
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
    /**
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
        if (\is_array($this->frameSummarys)) {
            Model::validateArray($this->frameSummarys);
        }
        if (\is_array($this->frames)) {
            Model::validateArray($this->frames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->frameNum) {
            $res['FrameNum'] = $this->frameNum;
        }

        if (null !== $this->frameSummarys) {
            if (\is_array($this->frameSummarys)) {
                $res['FrameSummarys'] = [];
                $n1                   = 0;
                foreach ($this->frameSummarys as $item1) {
                    $res['FrameSummarys'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->frames) {
            if (\is_array($this->frames)) {
                $res['Frames'] = [];
                $n1            = 0;
                foreach ($this->frames as $item1) {
                    $res['Frames'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
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
        if (isset($map['FrameNum'])) {
            $model->frameNum = $map['FrameNum'];
        }

        if (isset($map['FrameSummarys'])) {
            if (!empty($map['FrameSummarys'])) {
                $model->frameSummarys = [];
                $n1                   = 0;
                foreach ($map['FrameSummarys'] as $item1) {
                    $model->frameSummarys[$n1++] = frameSummarys::fromMap($item1);
                }
            }
        }

        if (isset($map['Frames'])) {
            if (!empty($map['Frames'])) {
                $model->frames = [];
                $n1            = 0;
                foreach ($map['Frames'] as $item1) {
                    $model->frames[$n1++] = frames::fromMap($item1);
                }
            }
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
