<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachTaskPageResponseBody\taskList;

class ListAICoachTaskPageResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var taskList[]
     */
    public $taskList;
    protected $_name = [
        'requestId' => 'requestId',
        'taskList'  => 'taskList',
    ];

    public function validate()
    {
        if (\is_array($this->taskList)) {
            Model::validateArray($this->taskList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->taskList) {
            if (\is_array($this->taskList)) {
                $res['taskList'] = [];
                $n1              = 0;
                foreach ($this->taskList as $item1) {
                    $res['taskList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['taskList'])) {
            if (!empty($map['taskList'])) {
                $model->taskList = [];
                $n1              = 0;
                foreach ($map['taskList'] as $item1) {
                    $model->taskList[$n1++] = taskList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
