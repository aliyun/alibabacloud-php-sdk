<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeRequestStatisticLogResponseBody\statistic;
use AlibabaCloud\Tea\Model;

class DescribeRequestStatisticLogResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var statistic[]
     */
    public $statistic;

    /**
     * @var int
     */
    public $total;

    /**
     * @var mixed[]
     */
    public $promptInfo;
    protected $_name = [
        'requestId'  => 'RequestId',
        'statistic'  => 'Statistic',
        'total'      => 'Total',
        'promptInfo' => 'PromptInfo',
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
        if (null !== $this->statistic) {
            $res['Statistic'] = [];
            if (null !== $this->statistic && \is_array($this->statistic)) {
                $n = 0;
                foreach ($this->statistic as $item) {
                    $res['Statistic'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->promptInfo) {
            $res['PromptInfo'] = $this->promptInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRequestStatisticLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Statistic'])) {
            if (!empty($map['Statistic'])) {
                $model->statistic = [];
                $n                = 0;
                foreach ($map['Statistic'] as $item) {
                    $model->statistic[$n++] = null !== $item ? statistic::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['PromptInfo'])) {
            $model->promptInfo = $map['PromptInfo'];
        }

        return $model;
    }
}
