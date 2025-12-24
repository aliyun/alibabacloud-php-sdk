<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\QueryPredictiveTaskInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\QueryPredictiveTaskInfoResponseBody\taskInfos\taskInfo;

class taskInfos extends Model
{
    /**
     * @var taskInfo[]
     */
    public $taskInfo;
    protected $_name = [
        'taskInfo' => 'TaskInfo',
    ];

    public function validate()
    {
        if (\is_array($this->taskInfo)) {
            Model::validateArray($this->taskInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskInfo) {
            if (\is_array($this->taskInfo)) {
                $res['TaskInfo'] = [];
                $n1 = 0;
                foreach ($this->taskInfo as $item1) {
                    $res['TaskInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['TaskInfo'])) {
            if (!empty($map['TaskInfo'])) {
                $model->taskInfo = [];
                $n1 = 0;
                foreach ($map['TaskInfo'] as $item1) {
                    $model->taskInfo[$n1] = taskInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
