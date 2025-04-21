<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListResponseBody\data\ocrResults;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListResponseBody\data\ocrResults\detailInfo\position;

class detailInfo extends Model
{
    /**
     * @var int[]
     */
    public $boxes;

    /**
     * @var float[][]
     */
    public $charProbs;

    /**
     * @var int
     */
    public $frameIndex;

    /**
     * @var position[]
     */
    public $position;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $text;

    /**
     * @var float
     */
    public $textProb;

    /**
     * @var float
     */
    public $timeStamp;

    /**
     * @var int
     */
    public $trackId;
    protected $_name = [
        'boxes' => 'Boxes',
        'charProbs' => 'CharProbs',
        'frameIndex' => 'FrameIndex',
        'position' => 'Position',
        'score' => 'Score',
        'text' => 'Text',
        'textProb' => 'TextProb',
        'timeStamp' => 'TimeStamp',
        'trackId' => 'TrackId',
    ];

    public function validate()
    {
        if (\is_array($this->boxes)) {
            Model::validateArray($this->boxes);
        }
        if (\is_array($this->charProbs)) {
            Model::validateArray($this->charProbs);
        }
        if (\is_array($this->position)) {
            Model::validateArray($this->position);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->boxes) {
            if (\is_array($this->boxes)) {
                $res['Boxes'] = [];
                $n1 = 0;
                foreach ($this->boxes as $item1) {
                    $res['Boxes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->charProbs) {
            if (\is_array($this->charProbs)) {
                $res['CharProbs'] = [];
                $n1 = 0;
                foreach ($this->charProbs as $item1) {
                    if (\is_array($item1)) {
                        $res['CharProbs'][$n1++] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['CharProbs'][$n1++][$n2++] = $item2;
                        }
                    }
                }
            }
        }

        if (null !== $this->frameIndex) {
            $res['FrameIndex'] = $this->frameIndex;
        }

        if (null !== $this->position) {
            if (\is_array($this->position)) {
                $res['Position'] = [];
                $n1 = 0;
                foreach ($this->position as $item1) {
                    $res['Position'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->textProb) {
            $res['TextProb'] = $this->textProb;
        }

        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        if (null !== $this->trackId) {
            $res['TrackId'] = $this->trackId;
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
        if (isset($map['Boxes'])) {
            if (!empty($map['Boxes'])) {
                $model->boxes = [];
                $n1 = 0;
                foreach ($map['Boxes'] as $item1) {
                    $model->boxes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CharProbs'])) {
            if (!empty($map['CharProbs'])) {
                $model->charProbs = [];
                $n1 = 0;
                foreach ($map['CharProbs'] as $item1) {
                    if (!empty($item1)) {
                        $model->charProbs[$n1++] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->charProbs[$n1++][$n2++] = $item2;
                        }
                    }
                }
            }
        }

        if (isset($map['FrameIndex'])) {
            $model->frameIndex = $map['FrameIndex'];
        }

        if (isset($map['Position'])) {
            if (!empty($map['Position'])) {
                $model->position = [];
                $n1 = 0;
                foreach ($map['Position'] as $item1) {
                    $model->position[$n1++] = position::fromMap($item1);
                }
            }
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['TextProb'])) {
            $model->textProb = $map['TextProb'];
        }

        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        if (isset($map['TrackId'])) {
            $model->trackId = $map['TrackId'];
        }

        return $model;
    }
}
