<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotTasksResponseBody\autoSnapshotTasks\autoSnapshotTask;

class autoSnapshotTasks extends Model
{
    /**
     * @var autoSnapshotTask[]
     */
    public $autoSnapshotTask;
    protected $_name = [
        'autoSnapshotTask' => 'AutoSnapshotTask',
    ];

    public function validate()
    {
        if (\is_array($this->autoSnapshotTask)) {
            Model::validateArray($this->autoSnapshotTask);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoSnapshotTask) {
            if (\is_array($this->autoSnapshotTask)) {
                $res['AutoSnapshotTask'] = [];
                $n1                      = 0;
                foreach ($this->autoSnapshotTask as $item1) {
                    $res['AutoSnapshotTask'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['AutoSnapshotTask'])) {
            if (!empty($map['AutoSnapshotTask'])) {
                $model->autoSnapshotTask = [];
                $n1                      = 0;
                foreach ($map['AutoSnapshotTask'] as $item1) {
                    $model->autoSnapshotTask[$n1++] = autoSnapshotTask::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
