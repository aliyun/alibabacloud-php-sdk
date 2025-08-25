<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListResponseBody\data\videoOcrResults;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListResponseBody\data\videoOcrResults\detailInfo\position;

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
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $text;

    /**
     * @var int
     */
    public $textType;
    protected $_name = [
        'boxes' => 'Boxes',
        'position' => 'Position',
        'score' => 'Score',
        'text' => 'Text',
        'textType' => 'TextType',
    ];

    public function validate()
    {
        if (\is_array($this->boxes)) {
            Model::validateArray($this->boxes);
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
                    $res['Boxes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->position) {
            if (\is_array($this->position)) {
                $res['Position'] = [];
                $n1 = 0;
                foreach ($this->position as $item1) {
                    $res['Position'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
                    $model->boxes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Position'])) {
            if (!empty($map['Position'])) {
                $model->position = [];
                $n1 = 0;
                foreach ($map['Position'] as $item1) {
                    $model->position[$n1] = position::fromMap($item1);
                    ++$n1;
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
