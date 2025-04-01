<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectStepMetricResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectStepMetricResponseBody\data\metrics\dataPoints;

class metrics extends Model
{
    /**
     * @var dataPoints[]
     */
    public $dataPoints;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'dataPoints' => 'DataPoints',
        'name' => 'Name',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->dataPoints)) {
            Model::validateArray($this->dataPoints);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
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
                    $res['DataPoints'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['Tags'][$key1] = $value1;
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
        if (isset($map['DataPoints'])) {
            if (!empty($map['DataPoints'])) {
                $model->dataPoints = [];
                $n1 = 0;
                foreach ($map['DataPoints'] as $item1) {
                    $model->dataPoints[$n1++] = dataPoints::fromMap($item1);
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                foreach ($map['Tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
