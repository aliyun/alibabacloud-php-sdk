<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class CreateAICoachTaskSessionRequest extends Model
{
    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'taskId' => 'taskId',
        'uid' => 'uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
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
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
