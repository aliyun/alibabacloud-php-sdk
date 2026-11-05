<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeInspectionTaskListResponseBody\taskLists;

class DescribeInspectionTaskListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var taskLists[]
     */
    public $taskLists;
    protected $_name = [
        'requestId' => 'RequestId',
        'taskLists' => 'TaskLists',
    ];

    public function validate()
    {
        if (\is_array($this->taskLists)) {
            Model::validateArray($this->taskLists);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->taskLists) {
            if (\is_array($this->taskLists)) {
                $res['TaskLists'] = [];
                $n1 = 0;
                foreach ($this->taskLists as $item1) {
                    $res['TaskLists'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TaskLists'])) {
            if (!empty($map['TaskLists'])) {
                $model->taskLists = [];
                $n1 = 0;
                foreach ($map['TaskLists'] as $item1) {
                    $model->taskLists[$n1] = taskLists::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
