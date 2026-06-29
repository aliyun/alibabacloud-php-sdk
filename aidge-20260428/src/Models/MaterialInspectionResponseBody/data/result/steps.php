<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\MaterialInspectionResponseBody\data\result;

use AlibabaCloud\Dara\Model;

class steps extends Model
{
    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $stepId;
    protected $_name = [
        'result' => 'Result',
        'stepId' => 'StepId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->stepId) {
            $res['StepId'] = $this->stepId;
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
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['StepId'])) {
            $model->stepId = $map['StepId'];
        }

        return $model;
    }
}
