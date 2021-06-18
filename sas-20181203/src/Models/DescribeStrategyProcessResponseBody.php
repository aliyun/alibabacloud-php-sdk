<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeStrategyProcessResponseBody extends Model
{
    /**
     * @var int
     */
    public $execStatus;

    /**
     * @var int
     */
    public $processRate;

    /**
     * @var int
     */
    public $strategyId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $passRate;
    protected $_name = [
        'execStatus'  => 'ExecStatus',
        'processRate' => 'ProcessRate',
        'strategyId'  => 'StrategyId',
        'requestId'   => 'RequestId',
        'passRate'    => 'PassRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->execStatus) {
            $res['ExecStatus'] = $this->execStatus;
        }
        if (null !== $this->processRate) {
            $res['ProcessRate'] = $this->processRate;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->passRate) {
            $res['PassRate'] = $this->passRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStrategyProcessResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecStatus'])) {
            $model->execStatus = $map['ExecStatus'];
        }
        if (isset($map['ProcessRate'])) {
            $model->processRate = $map['ProcessRate'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PassRate'])) {
            $model->passRate = $map['PassRate'];
        }

        return $model;
    }
}
