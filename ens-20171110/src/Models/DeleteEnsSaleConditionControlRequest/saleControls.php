<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DeleteEnsSaleConditionControlRequest;

use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteEnsSaleConditionControlRequest\saleControls\conditionControls;
use AlibabaCloud\Tea\Model;

class saleControls extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var conditionControls[]
     */
    public $conditionControls;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $moduleCode;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $orderType;
    protected $_name = [
        'conditionControls' => 'ConditionControls',
        'moduleCode'        => 'ModuleCode',
        'orderType'         => 'OrderType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionControls) {
            $res['ConditionControls'] = [];
            if (null !== $this->conditionControls && \is_array($this->conditionControls)) {
                $n = 0;
                foreach ($this->conditionControls as $item) {
                    $res['ConditionControls'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return saleControls
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionControls'])) {
            if (!empty($map['ConditionControls'])) {
                $model->conditionControls = [];
                $n                        = 0;
                foreach ($map['ConditionControls'] as $item) {
                    $model->conditionControls[$n++] = null !== $item ? conditionControls::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        return $model;
    }
}
