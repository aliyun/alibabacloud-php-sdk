<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models\GetResolveStatisticsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\GetResolveStatisticsResponseBody\dataPoints\dataPoint;

class dataPoints extends Model
{
    /**
     * @var dataPoint[]
     */
    public $dataPoint;
    protected $_name = [
        'dataPoint' => 'DataPoint',
    ];

    public function validate()
    {
        if (\is_array($this->dataPoint)) {
            Model::validateArray($this->dataPoint);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataPoint) {
            if (\is_array($this->dataPoint)) {
                $res['DataPoint'] = [];
                $n1 = 0;
                foreach ($this->dataPoint as $item1) {
                    $res['DataPoint'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DataPoint'])) {
            if (!empty($map['DataPoint'])) {
                $model->dataPoint = [];
                $n1 = 0;
                foreach ($map['DataPoint'] as $item1) {
                    $model->dataPoint[$n1++] = dataPoint::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
