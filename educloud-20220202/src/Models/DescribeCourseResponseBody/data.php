<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduCloud\V20220202\Models\DescribeCourseResponseBody;

use AlibabaCloud\SDK\EduCloud\V20220202\Models\DescribeCourseResponseBody\data\chapter;
use AlibabaCloud\SDK\EduCloud\V20220202\Models\DescribeCourseResponseBody\data\lessons;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var chapter[]
     */
    public $chapter;

    /**
     * @var string
     */
    public $courseId;

    /**
     * @var string
     */
    public $introduce;

    /**
     * @var int
     */
    public $lessonNum;

    /**
     * @var lessons[]
     */
    public $lessons;

    /**
     * @var string
     */
    public $pictureUrl;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'category'   => 'Category',
        'chapter'    => 'Chapter',
        'courseId'   => 'CourseId',
        'introduce'  => 'Introduce',
        'lessonNum'  => 'LessonNum',
        'lessons'    => 'Lessons',
        'pictureUrl' => 'PictureUrl',
        'tags'       => 'Tags',
        'title'      => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->chapter) {
            $res['Chapter'] = [];
            if (null !== $this->chapter && \is_array($this->chapter)) {
                $n = 0;
                foreach ($this->chapter as $item) {
                    $res['Chapter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->courseId) {
            $res['CourseId'] = $this->courseId;
        }
        if (null !== $this->introduce) {
            $res['Introduce'] = $this->introduce;
        }
        if (null !== $this->lessonNum) {
            $res['LessonNum'] = $this->lessonNum;
        }
        if (null !== $this->lessons) {
            $res['Lessons'] = [];
            if (null !== $this->lessons && \is_array($this->lessons)) {
                $n = 0;
                foreach ($this->lessons as $item) {
                    $res['Lessons'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pictureUrl) {
            $res['PictureUrl'] = $this->pictureUrl;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Chapter'])) {
            if (!empty($map['Chapter'])) {
                $model->chapter = [];
                $n              = 0;
                foreach ($map['Chapter'] as $item) {
                    $model->chapter[$n++] = null !== $item ? chapter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CourseId'])) {
            $model->courseId = $map['CourseId'];
        }
        if (isset($map['Introduce'])) {
            $model->introduce = $map['Introduce'];
        }
        if (isset($map['LessonNum'])) {
            $model->lessonNum = $map['LessonNum'];
        }
        if (isset($map['Lessons'])) {
            if (!empty($map['Lessons'])) {
                $model->lessons = [];
                $n              = 0;
                foreach ($map['Lessons'] as $item) {
                    $model->lessons[$n++] = null !== $item ? lessons::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PictureUrl'])) {
            $model->pictureUrl = $map['PictureUrl'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
