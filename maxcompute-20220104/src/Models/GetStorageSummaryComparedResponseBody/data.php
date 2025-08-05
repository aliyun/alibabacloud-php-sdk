<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetStorageSummaryComparedResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 20250601
     *
     * @var string
     */
    public $beginDate;

    /**
     * @example 20250604
     *
     * @var string
     */
    public $endDate;

    /**
     * @var float[]
     */
    public $rate;

    /**
     * @var string[]
     */
    public $unit;

    /**
     * @var float[]
     */
    public $value;
    protected $_name = [
        'beginDate' => 'beginDate',
        'endDate' => 'endDate',
        'rate' => 'rate',
        'unit' => 'unit',
        'value' => 'value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginDate) {
            $res['beginDate'] = $this->beginDate;
        }
        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }
        if (null !== $this->rate) {
            $res['rate'] = $this->rate;
        }
        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['beginDate'])) {
            $model->beginDate = $map['beginDate'];
        }
        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }
        if (isset($map['rate'])) {
            $model->rate = $map['rate'];
        }
        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
