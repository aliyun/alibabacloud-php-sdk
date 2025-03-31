<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\RecoveryFileResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $androidInstanceId;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'androidInstanceId' => 'AndroidInstanceId',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->androidInstanceId) {
            $res['AndroidInstanceId'] = $this->androidInstanceId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['AndroidInstanceId'])) {
            $model->androidInstanceId = $map['AndroidInstanceId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
