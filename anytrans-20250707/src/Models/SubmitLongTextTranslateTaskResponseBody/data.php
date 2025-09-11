<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitLongTextTranslateTaskResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'status' => 'status',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
