<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduCloud\V20220202\Models\DescribeCourseResponseBody\data\chapter;

use AlibabaCloud\SDK\EduCloud\V20220202\Models\DescribeCourseResponseBody\data\chapter\unit\lessons;
use AlibabaCloud\Tea\Model;

class unit extends Model
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
    protected $_name = [
        'lessons' => 'Lessons',
        'number'  => 'Number',
        'title'   => 'Title',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return unit
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

        return $model;
    }
}
