<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduCloud\V20220202\Models;

use AlibabaCloud\Tea\Model;

class DescribeCourseRequest extends Model
{
    /**
     * @var string
     */
    public $courseId;
    protected $_name = [
        'courseId' => 'CourseId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->courseId) {
            $res['CourseId'] = $this->courseId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCourseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CourseId'])) {
            $model->courseId = $map['CourseId'];
        }

        return $model;
    }
}
