<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\AppliedConsumStatResponseBody;

use AlibabaCloud\SDK\CGCS\V20211111\Models\DataAppliedConsumptionMapValue;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 应用消耗Cu统计
     *
     * @var DataAppliedConsumptionMapValue[][]
     */
    public $appliedConsumptionMap;
    protected $_name = [
        'appliedConsumptionMap' => 'AppliedConsumptionMap',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appliedConsumptionMap) {
            $res['AppliedConsumptionMap'] = $this->appliedConsumptionMap;
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
        if (isset($map['AppliedConsumptionMap'])) {
            $model->appliedConsumptionMap = $map['AppliedConsumptionMap'];
        }

        return $model;
    }
}
