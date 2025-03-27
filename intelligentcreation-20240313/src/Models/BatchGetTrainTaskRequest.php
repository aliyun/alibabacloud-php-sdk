<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class BatchGetTrainTaskRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunMainId;

    /**
     * @var string[]
     */
    public $taskIdList;
    protected $_name = [
        'aliyunMainId' => 'aliyunMainId',
        'taskIdList' => 'taskIdList',
    ];

    public function validate()
    {
        if (\is_array($this->taskIdList)) {
            Model::validateArray($this->taskIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunMainId) {
            $res['aliyunMainId'] = $this->aliyunMainId;
        }

        if (null !== $this->taskIdList) {
            if (\is_array($this->taskIdList)) {
                $res['taskIdList'] = [];
                $n1 = 0;
                foreach ($this->taskIdList as $item1) {
                    $res['taskIdList'][$n1++] = $item1;
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
        if (isset($map['aliyunMainId'])) {
            $model->aliyunMainId = $map['aliyunMainId'];
        }

        if (isset($map['taskIdList'])) {
            if (!empty($map['taskIdList'])) {
                $model->taskIdList = [];
                $n1 = 0;
                foreach ($map['taskIdList'] as $item1) {
                    $model->taskIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
