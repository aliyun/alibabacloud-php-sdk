<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserBillPredictionResponseBody\billPredictionData;

use AlibabaCloud\Tea\Model;

class billPredictionDataItem extends Model
{
    /**
     * @var float
     */
    public $value;

    /**
     * @var string
     */
    public $timeStp;

    /**
     * @var string
     */
    public $area;
    protected $_name = [
        'value'   => 'Value',
        'timeStp' => 'TimeStp',
        'area'    => 'Area',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->timeStp) {
            $res['TimeStp'] = $this->timeStp;
        }
        if (null !== $this->area) {
            $res['Area'] = $this->area;
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
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['TimeStp'])) {
            $model->timeStp = $map['TimeStp'];
        }
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }

        return $model;
    }
}
