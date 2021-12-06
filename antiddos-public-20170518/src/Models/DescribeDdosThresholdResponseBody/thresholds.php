<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosThresholdResponseBody;

use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosThresholdResponseBody\thresholds\threshold;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->threshold) {
            $res['Threshold'] = [];
            if (null !== $this->threshold && \is_array($this->threshold)) {
                $n = 0;
                foreach ($this->threshold as $item) {
                    $res['Threshold'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return thresholds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Threshold'])) {
            if (!empty($map['Threshold'])) {
                $model->threshold = [];
                $n                = 0;
                foreach ($map['Threshold'] as $item) {
                    $model->threshold[$n++] = null !== $item ? threshold::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
