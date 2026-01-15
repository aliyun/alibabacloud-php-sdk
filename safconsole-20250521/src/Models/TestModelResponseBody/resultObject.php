<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safconsole\V20250521\Models\TestModelResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\TestModelResponseBody\resultObject\testResult;

class resultObject extends Model
{
    /**
     * @var int
     */
    public $consistencyCount;

    /**
     * @var float
     */
    public $consistencyRate;

    /**
     * @var testResult[]
     */
    public $testResult;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'consistencyCount' => 'ConsistencyCount',
        'consistencyRate' => 'ConsistencyRate',
        'testResult' => 'TestResult',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->testResult)) {
            Model::validateArray($this->testResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consistencyCount) {
            $res['ConsistencyCount'] = $this->consistencyCount;
        }

        if (null !== $this->consistencyRate) {
            $res['ConsistencyRate'] = $this->consistencyRate;
        }

        if (null !== $this->testResult) {
            if (\is_array($this->testResult)) {
                $res['TestResult'] = [];
                $n1 = 0;
                foreach ($this->testResult as $item1) {
                    $res['TestResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['ConsistencyCount'])) {
            $model->consistencyCount = $map['ConsistencyCount'];
        }

        if (isset($map['ConsistencyRate'])) {
            $model->consistencyRate = $map['ConsistencyRate'];
        }

        if (isset($map['TestResult'])) {
            if (!empty($map['TestResult'])) {
                $model->testResult = [];
                $n1 = 0;
                foreach ($map['TestResult'] as $item1) {
                    $model->testResult[$n1] = testResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
