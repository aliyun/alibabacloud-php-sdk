<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteInterveneRuleResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var string[]
     */
    public $failIdList;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'code' => 'Code',
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->failIdList) {
            if (\is_array($this->failIdList)) {
                $res['FailIdList'] = [];
                $n1 = 0;
                foreach ($this->failIdList as $item1) {
                    $res['FailIdList'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['FailIdList'])) {
            if (!empty($map['FailIdList'])) {
                $model->failIdList = [];
                $n1 = 0;
                foreach ($map['FailIdList'] as $item1) {
                    $model->failIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
