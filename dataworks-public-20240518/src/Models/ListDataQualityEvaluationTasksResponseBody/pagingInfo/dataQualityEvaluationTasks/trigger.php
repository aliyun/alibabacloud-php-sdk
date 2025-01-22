<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTasksResponseBody\pagingInfo\dataQualityEvaluationTasks;

use AlibabaCloud\Dara\Model;

class trigger extends Model
{
    /**
     * @var int[]
     */
    public $taskIds;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'taskIds' => 'TaskIds',
        'type'    => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->taskIds)) {
            Model::validateArray($this->taskIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskIds) {
            if (\is_array($this->taskIds)) {
                $res['TaskIds'] = [];
                $n1             = 0;
                foreach ($this->taskIds as $item1) {
                    $res['TaskIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['TaskIds'])) {
            if (!empty($map['TaskIds'])) {
                $model->taskIds = [];
                $n1             = 0;
                foreach ($map['TaskIds'] as $item1) {
                    $model->taskIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
