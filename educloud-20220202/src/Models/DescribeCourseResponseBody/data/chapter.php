<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduCloud\V20220202\Models\DescribeCourseResponseBody\data;

use AlibabaCloud\SDK\EduCloud\V20220202\Models\DescribeCourseResponseBody\data\chapter\lessons;
use AlibabaCloud\SDK\EduCloud\V20220202\Models\DescribeCourseResponseBody\data\chapter\unit;
use AlibabaCloud\Tea\Model;

class chapter extends Model
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
        'number'  => 'Number',
        'title'   => 'Title',
        'unit'    => 'Unit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lessons) {
            $res['Lessons'] = [];
            if (null !== $this->lessons && \is_array($this->lessons)) {
                $n = 0;
                foreach ($this->lessons as $item) {
                    $res['Lessons'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['Unit'] = [];
            if (null !== $this->unit && \is_array($this->unit)) {
                $n = 0;
                foreach ($this->unit as $item) {
                    $res['Unit'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return chapter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lessons'])) {
            if (!empty($map['Lessons'])) {
                $model->lessons = [];
                $n              = 0;
                foreach ($map['Lessons'] as $item) {
                    $model->lessons[$n++] = null !== $item ? lessons::fromMap($item) : $item;
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
                $n           = 0;
                foreach ($map['Unit'] as $item) {
                    $model->unit[$n++] = null !== $item ? unit::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
