<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models\BatchCreateRequest\data\orgClassStudentGroupList;

use AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models\BatchCreateRequest\data\orgClassStudentGroupList\classList\students;
use AlibabaCloud\Tea\Model;

class classList extends Model
{
    /**
     * @description 班级id
     *
     * @var float
     */
    public $classId;

    /**
     * @description 班级名称
     *
     * @var string
     */
    public $className;

    /**
     * @description 班级学生
     *
     * @var students[]
     */
    public $students;
    protected $_name = [
        'classId'   => 'classId',
        'className' => 'className',
        'students'  => 'students',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classId) {
            $res['classId'] = $this->classId;
        }
        if (null !== $this->className) {
            $res['className'] = $this->className;
        }
        if (null !== $this->students) {
            $res['students'] = [];
            if (null !== $this->students && \is_array($this->students)) {
                $n = 0;
                foreach ($this->students as $item) {
                    $res['students'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return classList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['classId'])) {
            $model->classId = $map['classId'];
        }
        if (isset($map['className'])) {
            $model->className = $map['className'];
        }
        if (isset($map['students'])) {
            if (!empty($map['students'])) {
                $model->students = [];
                $n               = 0;
                foreach ($map['students'] as $item) {
                    $model->students[$n++] = null !== $item ? students::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
