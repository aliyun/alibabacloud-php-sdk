<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models\ListCoursesResponseBody;

use AlibabaCloud\Dara\Model;

class courses extends Model
{
    /**
     * @var string
     */
    public $category;

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
        'id' => 'Id',
        'introduction' => 'Introduction',
        'lessonNum' => 'LessonNum',
        'pictureUrl' => 'PictureUrl',
        'tags' => 'Tags',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
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

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Introduction'])) {
            $model->introduction = $map['Introduction'];
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
