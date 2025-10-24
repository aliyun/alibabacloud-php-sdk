<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetStorageSummaryComparedResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $beginDate;

    /**
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

    public function validate()
    {
        if (\is_array($this->rate)) {
            Model::validateArray($this->rate);
        }
        if (\is_array($this->unit)) {
            Model::validateArray($this->unit);
        }
        if (\is_array($this->value)) {
            Model::validateArray($this->value);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginDate) {
            $res['beginDate'] = $this->beginDate;
        }

        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }

        if (null !== $this->rate) {
            if (\is_array($this->rate)) {
                $res['rate'] = [];
                foreach ($this->rate as $key1 => $value1) {
                    $res['rate'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->unit) {
            if (\is_array($this->unit)) {
                $res['unit'] = [];
                foreach ($this->unit as $key1 => $value1) {
                    $res['unit'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->value) {
            if (\is_array($this->value)) {
                $res['value'] = [];
                foreach ($this->value as $key1 => $value1) {
                    $res['value'][$key1] = $value1;
                }
            }
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
        if (isset($map['beginDate'])) {
            $model->beginDate = $map['beginDate'];
        }

        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }

        if (isset($map['rate'])) {
            if (!empty($map['rate'])) {
                $model->rate = [];
                foreach ($map['rate'] as $key1 => $value1) {
                    $model->rate[$key1] = $value1;
                }
            }
        }

        if (isset($map['unit'])) {
            if (!empty($map['unit'])) {
                $model->unit = [];
                foreach ($map['unit'] as $key1 => $value1) {
                    $model->unit[$key1] = $value1;
                }
            }
        }

        if (isset($map['value'])) {
            if (!empty($map['value'])) {
                $model->value = [];
                foreach ($map['value'] as $key1 => $value1) {
                    $model->value[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
