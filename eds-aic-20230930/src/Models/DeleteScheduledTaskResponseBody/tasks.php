<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DeleteScheduledTaskResponseBody;

use AlibabaCloud\Dara\Model;

class tasks extends Model
{
    /**
     * @var string
     */
    public $scheduledId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'scheduledId' => 'ScheduledId',
        'success' => 'Success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scheduledId) {
            $res['ScheduledId'] = $this->scheduledId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['ScheduledId'])) {
            $model->scheduledId = $map['ScheduledId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
