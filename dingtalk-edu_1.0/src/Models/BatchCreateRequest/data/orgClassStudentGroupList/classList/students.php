<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models\BatchCreateRequest\data\orgClassStudentGroupList\classList;

use AlibabaCloud\Tea\Model;

class students extends Model
{
    /**
     * @description 学生名称
     *
     * @var string
     */
    public $stuName;

    /**
     * @description 学生id
     *
     * @var string
     */
    public $stuId;
    protected $_name = [
        'stuName' => 'stuName',
        'stuId'   => 'stuId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stuName) {
            $res['stuName'] = $this->stuName;
        }
        if (null !== $this->stuId) {
            $res['stuId'] = $this->stuId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return students
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['stuName'])) {
            $model->stuName = $map['stuName'];
        }
        if (isset($map['stuId'])) {
            $model->stuId = $map['stuId'];
        }

        return $model;
    }
}
