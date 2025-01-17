<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyResponseBody\strategies;

class DescribeStrategyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var strategies[]
     */
    public $strategies;
    protected $_name = [
        'requestId'  => 'RequestId',
        'strategies' => 'Strategies',
    ];

    public function validate()
    {
        if (\is_array($this->strategies)) {
            Model::validateArray($this->strategies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->strategies) {
            if (\is_array($this->strategies)) {
                $res['Strategies'] = [];
                $n1                = 0;
                foreach ($this->strategies as $item1) {
                    $res['Strategies'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['Strategies'])) {
            if (!empty($map['Strategies'])) {
                $model->strategies = [];
                $n1                = 0;
                foreach ($map['Strategies'] as $item1) {
                    $model->strategies[$n1++] = strategies::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
