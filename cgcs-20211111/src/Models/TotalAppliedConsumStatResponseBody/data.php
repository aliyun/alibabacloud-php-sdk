<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\TotalAppliedConsumStatResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 应用ID
     *
     * @var string
     */
    public $appliedId;

    /**
     * @description 分钟级消耗CU
     *
     * @var int
     */
    public $consumptionCu;

    /**
     * @description 统计日期
     *
     * @var string
     */
    public $statDate;
    protected $_name = [
        'appliedId'     => 'AppliedId',
        'consumptionCu' => 'ConsumptionCu',
        'statDate'      => 'StatDate',
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
        if (null !== $this->consumptionCu) {
            $res['ConsumptionCu'] = $this->consumptionCu;
        }
        if (null !== $this->statDate) {
            $res['StatDate'] = $this->statDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppliedId'])) {
            $model->appliedId = $map['AppliedId'];
        }
        if (isset($map['ConsumptionCu'])) {
            $model->consumptionCu = $map['ConsumptionCu'];
        }
        if (isset($map['StatDate'])) {
            $model->statDate = $map['StatDate'];
        }

        return $model;
    }
}
