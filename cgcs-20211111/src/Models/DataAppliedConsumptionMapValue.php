<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class DataAppliedConsumptionMapValue extends Model
{
    /**
     * @description 应用ID
     *
     * @var string
     */
    public $appliedId;

    /**
     * @description 统计日期
     *
     * @var string
     */
    public $statDate;

    /**
     * @description 分钟级消耗CU
     *
     * @var int
     */
    public $consumptionCu;
    protected $_name = [
        'appliedId'     => 'AppliedId',
        'statDate'      => 'StatDate',
        'consumptionCu' => 'ConsumptionCu',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appliedId) {
            $res['AppliedId'] = $this->appliedId;
        }
        if (null !== $this->statDate) {
            $res['StatDate'] = $this->statDate;
        }
        if (null !== $this->consumptionCu) {
            $res['ConsumptionCu'] = $this->consumptionCu;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataAppliedConsumptionMapValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppliedId'])) {
            $model->appliedId = $map['AppliedId'];
        }
        if (isset($map['StatDate'])) {
            $model->statDate = $map['StatDate'];
        }
        if (isset($map['ConsumptionCu'])) {
            $model->consumptionCu = $map['ConsumptionCu'];
        }

        return $model;
    }
}
