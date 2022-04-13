<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduCloud\V20220202\Models;

use AlibabaCloud\Tea\Model;

class DescribeCourseLessonRequest extends Model
{
    /**
     * @var string
     */
    public $lessonId;
    protected $_name = [
        'lessonId' => 'LessonId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCourseLessonRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LessonId'])) {
            $model->lessonId = $map['LessonId'];
        }

        return $model;
    }
}
