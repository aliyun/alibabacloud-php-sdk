<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Models;

use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageAdvanceRequest\task;
use AlibabaCloud\Tea\Model;

class ScanImageAdvanceRequest extends Model
{
    /**
     * @var string[]
     */
    public $scene;

    /**
     * @var task[]
     */
    public $task;
    protected $_name = [
        'scene' => 'Scene',
        'task'  => 'Task',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->task) {
            $res['Task'] = [];
            if (null !== $this->task && \is_array($this->task)) {
                $n = 0;
                foreach ($this->task as $item) {
                    $res['Task'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScanImageAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Scene'])) {
            if (!empty($map['Scene'])) {
                $model->scene = $map['Scene'];
            }
        }
        if (isset($map['Task'])) {
            if (!empty($map['Task'])) {
                $model->task = [];
                $n           = 0;
                foreach ($map['Task'] as $item) {
                    $model->task[$n++] = null !== $item ? task::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
