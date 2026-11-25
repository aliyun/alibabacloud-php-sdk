<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\ListLLMGatewayMetricsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ListLLMGatewayMetricsResponseBody\metricItems\dataPoints;

class metricItems extends Model
{
    /**
     * @var dataPoints[]
     */
    public $dataPoints;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'dataPoints' => 'DataPoints',
        'key' => 'Key',
        'model' => 'Model',
        'unit' => 'Unit',
    ];

    public function validate()
    {
        if (\is_array($this->dataPoints)) {
            Model::validateArray($this->dataPoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataPoints) {
            if (\is_array($this->dataPoints)) {
                $res['DataPoints'] = [];
                $n1 = 0;
                foreach ($this->dataPoints as $item1) {
                    $res['DataPoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
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
        if (isset($map['DataPoints'])) {
            if (!empty($map['DataPoints'])) {
                $model->dataPoints = [];
                $n1 = 0;
                foreach ($map['DataPoints'] as $item1) {
                    $model->dataPoints[$n1] = dataPoints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
