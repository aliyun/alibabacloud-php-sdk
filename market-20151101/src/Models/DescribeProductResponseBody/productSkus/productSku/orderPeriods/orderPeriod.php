<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\productSkus\productSku\orderPeriods;

use AlibabaCloud\Tea\Model;

class orderPeriod extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @example HOUR
     *
     * @var string
     */
    public $periodType;
    protected $_name = [
        'name'       => 'Name',
        'periodType' => 'PeriodType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->periodType) {
            $res['PeriodType'] = $this->periodType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderPeriod
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PeriodType'])) {
            $model->periodType = $map['PeriodType'];
        }

        return $model;
    }
}
