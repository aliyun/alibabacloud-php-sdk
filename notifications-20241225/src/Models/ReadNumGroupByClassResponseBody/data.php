<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Notifications\V20241225\Models\ReadNumGroupByClassResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $classId;

    /**
     * @var int
     */
    public $msgCount;
    protected $_name = [
        'classId' => 'ClassId',
        'msgCount' => 'MsgCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classId) {
            $res['ClassId'] = $this->classId;
        }

        if (null !== $this->msgCount) {
            $res['MsgCount'] = $this->msgCount;
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
        if (isset($map['ClassId'])) {
            $model->classId = $map['ClassId'];
        }

        if (isset($map['MsgCount'])) {
            $model->msgCount = $map['MsgCount'];
        }

        return $model;
    }
}
