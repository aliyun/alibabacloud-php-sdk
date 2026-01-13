<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeThreatEventTopMetricResponseBody\topMetrics;

class DescribeThreatEventTopMetricResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var topMetrics[]
     */
    public $topMetrics;
    protected $_name = [
        'requestId' => 'RequestId',
        'topMetrics' => 'TopMetrics',
    ];

    public function validate()
    {
        if (\is_array($this->topMetrics)) {
            Model::validateArray($this->topMetrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->topMetrics) {
            if (\is_array($this->topMetrics)) {
                $res['TopMetrics'] = [];
                $n1 = 0;
                foreach ($this->topMetrics as $item1) {
                    $res['TopMetrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TopMetrics'])) {
            if (!empty($map['TopMetrics'])) {
                $model->topMetrics = [];
                $n1 = 0;
                foreach ($map['TopMetrics'] as $item1) {
                    $model->topMetrics[$n1] = topMetrics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
