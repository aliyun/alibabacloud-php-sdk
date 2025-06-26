<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetVideoSnapshotTaskStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetVideoSnapshotTaskStatusResponseBody\result\data;

class result extends Model
{
    /**
     * @var data[]
     */
    public $data;

    /**
     * @var string
     */
    public $error;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'data' => 'data',
        'error' => 'error',
        'status' => 'status',
        'taskId' => 'task_id',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    $res['data'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->error) {
            $res['error'] = $this->error;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

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
        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['data'] as $item1) {
                    $model->data[$n1] = data::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['error'])) {
            $model->error = $map['error'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['task_id'])) {
            $model->taskId = $map['task_id'];
        }

        return $model;
    }
}
