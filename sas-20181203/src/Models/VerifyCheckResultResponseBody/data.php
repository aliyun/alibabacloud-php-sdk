<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\VerifyCheckResultResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $operateCode;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $throttlingTimeSecond;
    protected $_name = [
        'operateCode' => 'OperateCode',
        'taskId' => 'TaskId',
        'throttlingTimeSecond' => 'ThrottlingTimeSecond',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operateCode) {
            $res['OperateCode'] = $this->operateCode;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->throttlingTimeSecond) {
            $res['ThrottlingTimeSecond'] = $this->throttlingTimeSecond;
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
        if (isset($map['OperateCode'])) {
            $model->operateCode = $map['OperateCode'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['ThrottlingTimeSecond'])) {
            $model->throttlingTimeSecond = $map['ThrottlingTimeSecond'];
        }

        return $model;
    }
}
