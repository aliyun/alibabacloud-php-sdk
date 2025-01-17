<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\VerifyCheckInstanceResultResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $failInstances;
    /**
     * @var string
     */
    public $operateCode;
    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'failInstances' => 'FailInstances',
        'operateCode'   => 'OperateCode',
        'taskId'        => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->failInstances)) {
            Model::validateArray($this->failInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failInstances) {
            if (\is_array($this->failInstances)) {
                $res['FailInstances'] = [];
                $n1                   = 0;
                foreach ($this->failInstances as $item1) {
                    $res['FailInstances'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->operateCode) {
            $res['OperateCode'] = $this->operateCode;
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
        if (isset($map['FailInstances'])) {
            if (!empty($map['FailInstances'])) {
                $model->failInstances = [];
                $n1                   = 0;
                foreach ($map['FailInstances'] as $item1) {
                    $model->failInstances[$n1++] = $item1;
                }
            }
        }

        if (isset($map['OperateCode'])) {
            $model->operateCode = $map['OperateCode'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
