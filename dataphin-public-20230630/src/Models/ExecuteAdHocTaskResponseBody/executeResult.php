<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ExecuteAdHocTaskResponseBody;

use AlibabaCloud\Dara\Model;

class executeResult extends Model
{
    /**
     * @var int
     */
    public $subTaskCount;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'subTaskCount' => 'SubTaskCount',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subTaskCount) {
            $res['SubTaskCount'] = $this->subTaskCount;
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
        if (isset($map['SubTaskCount'])) {
            $model->subTaskCount = $map['SubTaskCount'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
