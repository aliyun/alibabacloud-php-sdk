<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models;

use AlibabaCloud\Dara\Model;

class DescribeCourseLessonRequest extends Model
{
    /**
     * @var int
     */
    public $lessonId;
    protected $_name = [
        'lessonId' => 'LessonId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lessonId) {
            $res['LessonId'] = $this->lessonId;
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
        if (isset($map['LessonId'])) {
            $model->lessonId = $map['LessonId'];
        }

        return $model;
    }
}
