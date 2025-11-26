<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DeleteEnsSaleConditionControlRequest\saleControls;

use AlibabaCloud\Dara\Model;

class conditionControls extends Model
{
    /**
     * @var string
     */
    public $conditionControlModuleCode;

    /**
     * @var string
     */
    public $conditionControlModuleValue;
    protected $_name = [
        'conditionControlModuleCode' => 'ConditionControlModuleCode',
        'conditionControlModuleValue' => 'ConditionControlModuleValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditionControlModuleCode) {
            $res['ConditionControlModuleCode'] = $this->conditionControlModuleCode;
        }

        if (null !== $this->conditionControlModuleValue) {
            $res['ConditionControlModuleValue'] = $this->conditionControlModuleValue;
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
        if (isset($map['ConditionControlModuleCode'])) {
            $model->conditionControlModuleCode = $map['ConditionControlModuleCode'];
        }

        if (isset($map['ConditionControlModuleValue'])) {
            $model->conditionControlModuleValue = $map['ConditionControlModuleValue'];
        }

        return $model;
    }
}
