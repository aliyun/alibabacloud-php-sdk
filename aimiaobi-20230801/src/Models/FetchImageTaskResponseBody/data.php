<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FetchImageTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FetchImageTaskResponseBody\data\taskInfoList;

class data extends Model
{
    /**
     * @var taskInfoList[]
     */
    public $taskInfoList;
    protected $_name = [
        'taskInfoList' => 'TaskInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->taskInfoList)) {
            Model::validateArray($this->taskInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskInfoList) {
            if (\is_array($this->taskInfoList)) {
                $res['TaskInfoList'] = [];
                $n1 = 0;
                foreach ($this->taskInfoList as $item1) {
                    $res['TaskInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TaskInfoList'])) {
            if (!empty($map['TaskInfoList'])) {
                $model->taskInfoList = [];
                $n1 = 0;
                foreach ($map['TaskInfoList'] as $item1) {
                    $model->taskInfoList[$n1++] = taskInfoList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
