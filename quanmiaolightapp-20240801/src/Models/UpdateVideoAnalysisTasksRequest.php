<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Dara\Model;

class UpdateVideoAnalysisTasksRequest extends Model
{
    /**
     * @var string[]
     */
    public $taskIds;

    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'taskIds' => 'taskIds',
        'taskStatus' => 'taskStatus',
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
                $res['taskIds'] = [];
                $n1 = 0;
                foreach ($this->taskIds as $item1) {
                    $res['taskIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskStatus) {
            $res['taskStatus'] = $this->taskStatus;
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
        if (isset($map['taskIds'])) {
            if (!empty($map['taskIds'])) {
                $model->taskIds = [];
                $n1 = 0;
                foreach ($map['taskIds'] as $item1) {
                    $model->taskIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['taskStatus'])) {
            $model->taskStatus = $map['taskStatus'];
        }

        return $model;
    }
}
