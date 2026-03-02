<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MonitorMetricMeasureData extends Model
{
    /**
     * @var string
     */
    public $measure;

    /**
     * @var MonitorMetricMeasurePointData[]
     */
    public $measurePointData;
    protected $_name = [
        'measure' => 'measure',
        'measurePointData' => 'measurePointData',
    ];

    public function validate()
    {
        if (\is_array($this->measurePointData)) {
            Model::validateArray($this->measurePointData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->measure) {
            $res['measure'] = $this->measure;
        }

        if (null !== $this->measurePointData) {
            if (\is_array($this->measurePointData)) {
                $res['measurePointData'] = [];
                $n1 = 0;
                foreach ($this->measurePointData as $item1) {
                    $res['measurePointData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['measure'])) {
            $model->measure = $map['measure'];
        }

        if (isset($map['measurePointData'])) {
            if (!empty($map['measurePointData'])) {
                $model->measurePointData = [];
                $n1 = 0;
                foreach ($map['measurePointData'] as $item1) {
                    $model->measurePointData[$n1] = MonitorMetricMeasurePointData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
