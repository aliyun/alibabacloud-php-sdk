<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeActionResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeActionResponseBody\data\elements\boxes;

class elements extends Model
{
    /**
     * @var boxes[]
     */
    public $boxes;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var float[]
     */
    public $scores;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'boxes' => 'Boxes',
        'labels' => 'Labels',
        'scores' => 'Scores',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        if (\is_array($this->boxes)) {
            Model::validateArray($this->boxes);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->scores)) {
            Model::validateArray($this->scores);
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
                    $res['Boxes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scores) {
            if (\is_array($this->scores)) {
                $res['Scores'] = [];
                $n1 = 0;
                foreach ($this->scores as $item1) {
                    $res['Scores'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
                    $model->boxes[$n1] = boxes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Scores'])) {
            if (!empty($map['Scores'])) {
                $model->scores = [];
                $n1 = 0;
                foreach ($map['Scores'] as $item1) {
                    $model->scores[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
