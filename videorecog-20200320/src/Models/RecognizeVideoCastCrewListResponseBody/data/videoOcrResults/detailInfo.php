<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListResponseBody\data\videoOcrResults;

use AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListResponseBody\data\videoOcrResults\detailInfo\position;
use AlibabaCloud\Tea\Model;

class detailInfo extends Model
{
    /**
     * @var int[]
     */
    public $boxes;

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
     * @example 0
     *
     * @var int
     */
    public $textType;
    protected $_name = [
        'boxes'    => 'Boxes',
        'position' => 'Position',
        'score'    => 'Score',
        'text'     => 'Text',
        'textType' => 'TextType',
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
        if (null !== $this->textType) {
            $res['TextType'] = $this->textType;
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
        if (isset($map['TextType'])) {
            $model->textType = $map['TextType'];
        }

        return $model;
    }
}
