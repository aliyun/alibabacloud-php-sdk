<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserBillPredictionResponseBody\billPredictionData;

use AlibabaCloud\Tea\Model;

class billPredictionDataItem extends Model
{
    /**
     * @description The billable region.
     *
     * @example CN
     *
     * @var string
     */
    public $area;

    /**
     * @description The time when the value used as the estimated value is generated. This field is returned only if the metering method is pay by 95th percentile, pay by 95th percentile bandwidth with 50% off from 00:00 to 08:00, or pay by 4th peak bandwidth per month.
     *
     * @example 2018-10-15T16:00:00Z
     *
     * @var string
     */
    public $timeStp;

    /**
     * @description The estimated value.
     *
     * @example 10000
     *
     * @var float
     */
    public $value;
    protected $_name = [
        'area'    => 'Area',
        'timeStp' => 'TimeStp',
        'value'   => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->timeStp) {
            $res['TimeStp'] = $this->timeStp;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return billPredictionDataItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['TimeStp'])) {
            $model->timeStp = $map['TimeStp'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
