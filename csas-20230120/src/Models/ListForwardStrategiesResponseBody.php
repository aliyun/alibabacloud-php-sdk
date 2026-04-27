<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListForwardStrategiesResponseBody\forwardStrategies;

class ListForwardStrategiesResponseBody extends Model
{
    /**
     * @var forwardStrategies[]
     */
    public $forwardStrategies;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'forwardStrategies' => 'ForwardStrategies',
        'requestId' => 'RequestId',
        'totalNum' => 'TotalNum',
    ];

    public function validate()
    {
        if (\is_array($this->forwardStrategies)) {
            Model::validateArray($this->forwardStrategies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forwardStrategies) {
            if (\is_array($this->forwardStrategies)) {
                $res['ForwardStrategies'] = [];
                $n1 = 0;
                foreach ($this->forwardStrategies as $item1) {
                    $res['ForwardStrategies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
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
        if (isset($map['ForwardStrategies'])) {
            if (!empty($map['ForwardStrategies'])) {
                $model->forwardStrategies = [];
                $n1 = 0;
                foreach ($map['ForwardStrategies'] as $item1) {
                    $model->forwardStrategies[$n1] = forwardStrategies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}
