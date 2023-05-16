<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\CreateEnsSaleControlRequest\saleControls;

use AlibabaCloud\Tea\Model;

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
        'conditionControlModuleCode'  => 'ConditionControlModuleCode',
        'conditionControlModuleValue' => 'ConditionControlModuleValue',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return conditionControls
     */
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
