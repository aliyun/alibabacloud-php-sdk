<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MonitorMetricResult extends Model
{
    /**
     * @var MonitorMetricMeasureData[]
     */
    public $measureData;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'measureData' => 'measureData',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->measureData)) {
            Model::validateArray($this->measureData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->measureData) {
            if (\is_array($this->measureData)) {
                $res['measureData'] = [];
                $n1 = 0;
                foreach ($this->measureData as $item1) {
                    $res['measureData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['measureData'])) {
            if (!empty($map['measureData'])) {
                $model->measureData = [];
                $n1 = 0;
                foreach ($map['measureData'] as $item1) {
                    $model->measureData[$n1] = MonitorMetricMeasureData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
