<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeCourseResponseBody\course;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeCourseResponseBody\course\chapters\lessons;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeCourseResponseBody\course\chapters\unit;

class chapters extends Model
{
    /**
     * @var lessons[]
     */
    public $lessons;

    /**
     * @var int
     */
    public $number;

    /**
     * @var string
     */
    public $title;

    /**
     * @var unit[]
     */
    public $unit;
    protected $_name = [
        'lessons' => 'Lessons',
        'number' => 'Number',
        'title' => 'Title',
        'unit' => 'Unit',
    ];

    public function validate()
    {
        if (\is_array($this->lessons)) {
            Model::validateArray($this->lessons);
        }
        if (\is_array($this->unit)) {
            Model::validateArray($this->unit);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lessons) {
            if (\is_array($this->lessons)) {
                $res['Lessons'] = [];
                $n1 = 0;
                foreach ($this->lessons as $item1) {
                    $res['Lessons'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->unit) {
            if (\is_array($this->unit)) {
                $res['Unit'] = [];
                $n1 = 0;
                foreach ($this->unit as $item1) {
                    $res['Unit'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Lessons'])) {
            if (!empty($map['Lessons'])) {
                $model->lessons = [];
                $n1 = 0;
                foreach ($map['Lessons'] as $item1) {
                    $model->lessons[$n1++] = lessons::fromMap($item1);
                }
            }
        }

        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Unit'])) {
            if (!empty($map['Unit'])) {
                $model->unit = [];
                $n1 = 0;
                foreach ($map['Unit'] as $item1) {
                    $model->unit[$n1++] = unit::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
