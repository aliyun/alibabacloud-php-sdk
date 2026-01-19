<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterTaskMetricsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterTaskMetricsResponseBody\items\slsMetricsItems;

class items extends Model
{
    /**
     * @var slsMetricsItems[]
     */
    public $slsMetricsItems;
    protected $_name = [
        'slsMetricsItems' => 'SlsMetricsItems',
    ];

    public function validate()
    {
        if (\is_array($this->slsMetricsItems)) {
            Model::validateArray($this->slsMetricsItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->slsMetricsItems) {
            if (\is_array($this->slsMetricsItems)) {
                $res['SlsMetricsItems'] = [];
                $n1 = 0;
                foreach ($this->slsMetricsItems as $item1) {
                    $res['SlsMetricsItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SlsMetricsItems'])) {
            if (!empty($map['SlsMetricsItems'])) {
                $model->slsMetricsItems = [];
                $n1 = 0;
                foreach ($map['SlsMetricsItems'] as $item1) {
                    $model->slsMetricsItems[$n1] = slsMetricsItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
