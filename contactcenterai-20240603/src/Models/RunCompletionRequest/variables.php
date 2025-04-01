<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionRequest;

use AlibabaCloud\Dara\Model;

class variables extends Model
{
    /**
     * @var string
     */
    public $variableCode;

    /**
     * @var string
     */
    public $variableValue;
    protected $_name = [
        'variableCode' => 'variableCode',
        'variableValue' => 'variableValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->variableCode) {
            $res['variableCode'] = $this->variableCode;
        }

        if (null !== $this->variableValue) {
            $res['variableValue'] = $this->variableValue;
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
        if (isset($map['variableCode'])) {
            $model->variableCode = $map['variableCode'];
        }

        if (isset($map['variableValue'])) {
            $model->variableValue = $map['variableValue'];
        }

        return $model;
    }
}
