<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\CreateClassResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 课堂唯一标识。
     *
     * @var string
     */
    public $classId;
    protected $_name = [
        'classId' => 'ClassId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classId) {
            $res['ClassId'] = $this->classId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClassId'])) {
            $model->classId = $map['ClassId'];
        }

        return $model;
    }
}
