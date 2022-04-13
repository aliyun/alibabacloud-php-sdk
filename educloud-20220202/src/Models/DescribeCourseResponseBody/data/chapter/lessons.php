<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduCloud\V20220202\Models\DescribeCourseResponseBody\data\chapter;

use AlibabaCloud\Tea\Model;

class lessons extends Model
{
    /**
     * @var string
     */
    public $lessonId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'lessonId' => 'LessonId',
        'title'    => 'Title',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lessonId) {
            $res['LessonId'] = $this->lessonId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lessons
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LessonId'])) {
            $model->lessonId = $map['LessonId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
