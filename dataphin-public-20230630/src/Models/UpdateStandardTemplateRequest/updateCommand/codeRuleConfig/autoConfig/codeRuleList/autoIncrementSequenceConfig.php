<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateStandardTemplateRequest\updateCommand\codeRuleConfig\autoConfig\codeRuleList;

use AlibabaCloud\Dara\Model;

class autoIncrementSequenceConfig extends Model
{
    /**
     * @var int
     */
    public $digit;

    /**
     * @var bool
     */
    public $needPaddingZero;

    /**
     * @var int
     */
    public $startValue;

    /**
     * @var int
     */
    public $step;
    protected $_name = [
        'digit' => 'Digit',
        'needPaddingZero' => 'NeedPaddingZero',
        'startValue' => 'StartValue',
        'step' => 'Step',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->digit) {
            $res['Digit'] = $this->digit;
        }

        if (null !== $this->needPaddingZero) {
            $res['NeedPaddingZero'] = $this->needPaddingZero;
        }

        if (null !== $this->startValue) {
            $res['StartValue'] = $this->startValue;
        }

        if (null !== $this->step) {
            $res['Step'] = $this->step;
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
        if (isset($map['Digit'])) {
            $model->digit = $map['Digit'];
        }

        if (isset($map['NeedPaddingZero'])) {
            $model->needPaddingZero = $map['NeedPaddingZero'];
        }

        if (isset($map['StartValue'])) {
            $model->startValue = $map['StartValue'];
        }

        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }

        return $model;
    }
}
