<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUserBillPredictionResponseBody\billPredictionData;

use AlibabaCloud\Tea\Model;

class billPredictionDataItem extends Model
{
    /**
     * @var string
     */
    public $area;

    /**
     * @var string
     */
    public $timeStp;

    /**
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
