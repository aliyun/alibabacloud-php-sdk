<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Dara\Model;

class BatchCancelTasksShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $taskCode;

    /**
     * @var string
     */
    public $taskIdsShrink;
    protected $_name = [
        'taskCode' => 'taskCode',
        'taskIdsShrink' => 'taskIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskCode) {
            $res['taskCode'] = $this->taskCode;
        }

        if (null !== $this->taskIdsShrink) {
            $res['taskIds'] = $this->taskIdsShrink;
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
        if (isset($map['taskCode'])) {
            $model->taskCode = $map['taskCode'];
        }

        if (isset($map['taskIds'])) {
            $model->taskIdsShrink = $map['taskIds'];
        }

        return $model;
    }
}
