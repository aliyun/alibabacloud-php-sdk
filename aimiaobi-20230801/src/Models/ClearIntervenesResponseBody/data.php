<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ClearIntervenesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $failIdList;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'failIdList' => 'FailIdList',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->failIdList)) {
            Model::validateArray($this->failIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failIdList) {
            if (\is_array($this->failIdList)) {
                $res['FailIdList'] = [];
                $n1 = 0;
                foreach ($this->failIdList as $item1) {
                    $res['FailIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['FailIdList'])) {
            if (!empty($map['FailIdList'])) {
                $model->failIdList = [];
                $n1 = 0;
                foreach ($map['FailIdList'] as $item1) {
                    $model->failIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
