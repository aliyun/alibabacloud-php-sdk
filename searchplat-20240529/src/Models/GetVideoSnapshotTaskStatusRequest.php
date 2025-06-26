<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models;

use AlibabaCloud\Dara\Model;

class GetVideoSnapshotTaskStatusRequest extends Model
{
    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'taskId' => 'task_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
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
        if (isset($map['task_id'])) {
            $model->taskId = $map['task_id'];
        }

        return $model;
    }
}
