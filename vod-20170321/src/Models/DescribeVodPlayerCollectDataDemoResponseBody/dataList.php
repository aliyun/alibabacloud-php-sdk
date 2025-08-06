<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodPlayerCollectDataDemoResponseBody;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var string
     */
    public $metric;

    /**
     * @var float
     */
    public $value;

    /**
     * @var float
     */
    public $valueRatio;

    /**
     * @var float
     */
    public $valueRefer;
    protected $_name = [
        'metric' => 'Metric',
        'value' => 'Value',
        'valueRatio' => 'ValueRatio',
        'valueRefer' => 'ValueRefer',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        if (null !== $this->valueRatio) {
            $res['ValueRatio'] = $this->valueRatio;
        }

        if (null !== $this->valueRefer) {
            $res['ValueRefer'] = $this->valueRefer;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        if (isset($map['ValueRatio'])) {
            $model->valueRatio = $map['ValueRatio'];
        }

        if (isset($map['ValueRefer'])) {
            $model->valueRefer = $map['ValueRefer'];
        }

        return $model;
    }
}
