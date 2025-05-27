<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models;

use AlibabaCloud\Dara\Model;

class DescribeCourseRequest extends Model
{
    /**
     * @var int
     */
    public $courseId;
    protected $_name = [
        'courseId' => 'CourseId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->courseId) {
            $res['CourseId'] = $this->courseId;
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
        if (isset($map['CourseId'])) {
            $model->courseId = $map['CourseId'];
        }

        return $model;
    }
}
