<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListResponseBody\data\ocrResults;

use AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListResponseBody\data\ocrResults\detailInfo\position;
use AlibabaCloud\Tea\Model;

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
     * @example 17
     *
     * @var int
     */
    public $frameIndex;

    /**
     * @var position[]
     */
    public $position;

    /**
     * @example 92.07685702563117
     *
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $text;

    /**
     * @example 0.9207685702563116
     *
     * @var float
     */
    public $textProb;

    /**
     * @example 0.28
     *
     * @var float
     */
    public $timeStamp;

    /**
     * @example 1
     *
     * @var int
     */
    public $trackId;
    protected $_name = [
        'boxes'      => 'Boxes',
        'charProbs'  => 'CharProbs',
        'frameIndex' => 'FrameIndex',
        'position'   => 'Position',
        'score'      => 'Score',
        'text'       => 'Text',
        'textProb'   => 'TextProb',
        'timeStamp'  => 'TimeStamp',
        'trackId'    => 'TrackId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boxes) {
            $res['Boxes'] = $this->boxes;
        }
        if (null !== $this->charProbs) {
            $res['CharProbs'] = $this->charProbs;
        }
        if (null !== $this->frameIndex) {
            $res['FrameIndex'] = $this->frameIndex;
        }
        if (null !== $this->position) {
            $res['Position'] = [];
            if (null !== $this->position && \is_array($this->position)) {
                $n = 0;
                foreach ($this->position as $item) {
                    $res['Position'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return detailInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Boxes'])) {
            if (!empty($map['Boxes'])) {
                $model->boxes = $map['Boxes'];
            }
        }
        if (isset($map['CharProbs'])) {
            if (!empty($map['CharProbs'])) {
                $model->charProbs = $map['CharProbs'];
            }
        }
        if (isset($map['FrameIndex'])) {
            $model->frameIndex = $map['FrameIndex'];
        }
        if (isset($map['Position'])) {
            if (!empty($map['Position'])) {
                $model->position = [];
                $n               = 0;
                foreach ($map['Position'] as $item) {
                    $model->position[$n++] = null !== $item ? position::fromMap($item) : $item;
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
