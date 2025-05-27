<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeCourseResponseBody\course\chapters;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeCourseResponseBody\course\chapters\unit\lessons;

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
        'number' => 'Number',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->lessons)) {
            Model::validateArray($this->lessons);
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

        return $model;
    }
}
