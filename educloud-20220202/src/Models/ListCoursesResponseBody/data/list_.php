<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduCloud\V20220202\Models\ListCoursesResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $category;

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
        'courseId'   => 'CourseId',
        'introduce'  => 'Introduce',
        'lessonNum'  => 'LessonNum',
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
        if (null !== $this->courseId) {
            $res['CourseId'] = $this->courseId;
        }
        if (null !== $this->introduce) {
            $res['Introduce'] = $this->introduce;
        }
        if (null !== $this->lessonNum) {
            $res['LessonNum'] = $this->lessonNum;
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
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
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
