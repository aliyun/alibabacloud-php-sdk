<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models;

use AlibabaCloud\Dara\Model;

class GetTaskResultRequest extends Model
{
    /**
     * @var string[]
     */
    public $requiredFieldList;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'requiredFieldList' => 'requiredFieldList',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        if (\is_array($this->requiredFieldList)) {
            Model::validateArray($this->requiredFieldList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requiredFieldList) {
            if (\is_array($this->requiredFieldList)) {
                $res['requiredFieldList'] = [];
                $n1 = 0;
                foreach ($this->requiredFieldList as $item1) {
                    $res['requiredFieldList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
        if (isset($map['requiredFieldList'])) {
            if (!empty($map['requiredFieldList'])) {
                $model->requiredFieldList = [];
                $n1 = 0;
                foreach ($map['requiredFieldList'] as $item1) {
                    $model->requiredFieldList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
