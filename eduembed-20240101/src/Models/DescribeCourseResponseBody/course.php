<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeCourseResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeCourseResponseBody\course\chapters;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeCourseResponseBody\course\lessons;

class course extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var chapters[]
     */
    public $chapters;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $introduction;

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
        'category' => 'Category',
        'chapters' => 'Chapters',
        'id' => 'Id',
        'introduction' => 'Introduction',
        'lessonNum' => 'LessonNum',
        'lessons' => 'Lessons',
        'pictureUrl' => 'PictureUrl',
        'tags' => 'Tags',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->chapters)) {
            Model::validateArray($this->chapters);
        }
        if (\is_array($this->lessons)) {
            Model::validateArray($this->lessons);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->chapters) {
            if (\is_array($this->chapters)) {
                $res['Chapters'] = [];
                $n1 = 0;
                foreach ($this->chapters as $item1) {
                    $res['Chapters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->introduction) {
            $res['Introduction'] = $this->introduction;
        }

        if (null !== $this->lessonNum) {
            $res['LessonNum'] = $this->lessonNum;
        }

        if (null !== $this->lessons) {
            if (\is_array($this->lessons)) {
                $res['Lessons'] = [];
                $n1 = 0;
                foreach ($this->lessons as $item1) {
                    $res['Lessons'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Chapters'])) {
            if (!empty($map['Chapters'])) {
                $model->chapters = [];
                $n1 = 0;
                foreach ($map['Chapters'] as $item1) {
                    $model->chapters[$n1++] = chapters::fromMap($item1);
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Introduction'])) {
            $model->introduction = $map['Introduction'];
        }

        if (isset($map['LessonNum'])) {
            $model->lessonNum = $map['LessonNum'];
        }

        if (isset($map['Lessons'])) {
            if (!empty($map['Lessons'])) {
                $model->lessons = [];
                $n1 = 0;
                foreach ($map['Lessons'] as $item1) {
                    $model->lessons[$n1++] = lessons::fromMap($item1);
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
