<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobResponseBody;

use AlibabaCloud\Dara\Model;

class tasks extends Model
{
    /**
     * @var string[]
     */
    public $executorIds;
    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'executorIds' => 'ExecutorIds',
        'taskName'    => 'TaskName',
    ];

    public function validate()
    {
        if (\is_array($this->executorIds)) {
            Model::validateArray($this->executorIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executorIds) {
            if (\is_array($this->executorIds)) {
                $res['ExecutorIds'] = [];
                $n1                 = 0;
                foreach ($this->executorIds as $item1) {
                    $res['ExecutorIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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
        if (isset($map['ExecutorIds'])) {
            if (!empty($map['ExecutorIds'])) {
                $model->executorIds = [];
                $n1                 = 0;
                foreach ($map['ExecutorIds'] as $item1) {
                    $model->executorIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
