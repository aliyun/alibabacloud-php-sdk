<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserEventTrendResponseBody\trend;

class DescribeUserEventTrendResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var trend[]
     */
    public $trend;
    protected $_name = [
        'requestId' => 'RequestId',
        'trend'     => 'Trend',
    ];

    public function validate()
    {
        if (\is_array($this->trend)) {
            Model::validateArray($this->trend);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->trend) {
            if (\is_array($this->trend)) {
                $res['Trend'] = [];
                $n1           = 0;
                foreach ($this->trend as $item1) {
                    $res['Trend'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['Trend'])) {
            if (!empty($map['Trend'])) {
                $model->trend = [];
                $n1           = 0;
                foreach ($map['Trend'] as $item1) {
                    $model->trend[$n1++] = trend::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
