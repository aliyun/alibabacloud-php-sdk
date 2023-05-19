<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserBillPredictionResponseBody\billPredictionData;

use AlibabaCloud\Tea\Model;

class billPredictionDataItem extends Model
{
    /**
     * @example CN
     *
     * @var string
     */
    public $area;

    /**
     * @example 2018-10-15T16:00:00Z
     *
     * @var string
     */
    public $timeStp;

    /**
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
