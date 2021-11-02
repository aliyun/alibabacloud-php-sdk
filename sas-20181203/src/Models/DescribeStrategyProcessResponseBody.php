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
     * @var string
     */
    public $passRate;

    /**
     * @var int
     */
    public $processRate;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $strategyId;
    protected $_name = [
        'execStatus'  => 'ExecStatus',
        'passRate'    => 'PassRate',
        'processRate' => 'ProcessRate',
        'requestId'   => 'RequestId',
        'strategyId'  => 'StrategyId',
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
        if (null !== $this->passRate) {
            $res['PassRate'] = $this->passRate;
        }
        if (null !== $this->processRate) {
            $res['ProcessRate'] = $this->processRate;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
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
        if (isset($map['PassRate'])) {
            $model->passRate = $map['PassRate'];
        }
        if (isset($map['ProcessRate'])) {
            $model->processRate = $map['ProcessRate'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }

        return $model;
    }
}
