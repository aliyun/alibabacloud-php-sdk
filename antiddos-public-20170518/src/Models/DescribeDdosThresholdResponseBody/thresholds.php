<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosThresholdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosThresholdResponseBody\thresholds\threshold;

class thresholds extends Model
{
    /**
     * @var threshold[]
     */
    public $threshold;
    protected $_name = [
        'threshold' => 'Threshold',
    ];

    public function validate()
    {
        if (\is_array($this->threshold)) {
            Model::validateArray($this->threshold);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->threshold) {
            if (\is_array($this->threshold)) {
                $res['Threshold'] = [];
                $n1 = 0;
                foreach ($this->threshold as $item1) {
                    $res['Threshold'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Threshold'])) {
            if (!empty($map['Threshold'])) {
                $model->threshold = [];
                $n1 = 0;
                foreach ($map['Threshold'] as $item1) {
                    $model->threshold[$n1++] = threshold::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
