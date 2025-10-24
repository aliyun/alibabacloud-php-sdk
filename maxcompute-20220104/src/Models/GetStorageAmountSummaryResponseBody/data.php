<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetStorageAmountSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string[]
     */
    public $unit;

    /**
     * @var int[]
     */
    public $value;
    protected $_name = [
        'date' => 'date',
        'timestamp' => 'timestamp',
        'unit' => 'unit',
        'value' => 'value',
    ];

    public function validate()
    {
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
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
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
        if (isset($map['date'])) {
            $model->date = $map['date'];
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
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
