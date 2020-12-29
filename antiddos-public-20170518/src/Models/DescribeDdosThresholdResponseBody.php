<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosThresholdResponseBody\thresholds;
use AlibabaCloud\Tea\Model;

class DescribeDdosThresholdResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var thresholds[]
     */
    public $thresholds;
    protected $_name = [
        'requestId'  => 'RequestId',
        'thresholds' => 'Thresholds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->thresholds) {
            $res['Thresholds'] = [];
            if (null !== $this->thresholds && \is_array($this->thresholds)) {
                $n = 0;
                foreach ($this->thresholds as $item) {
                    $res['Thresholds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDdosThresholdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Thresholds'])) {
            if (!empty($map['Thresholds'])) {
                $model->thresholds = [];
                $n                 = 0;
                foreach ($map['Thresholds'] as $item) {
                    $model->thresholds[$n++] = null !== $item ? thresholds::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
