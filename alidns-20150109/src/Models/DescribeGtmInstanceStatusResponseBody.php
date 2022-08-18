<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeGtmInstanceStatusResponseBody extends Model
{
    /**
     * @var int
     */
    public $addrNotAvailableNum;

    /**
     * @var int
     */
    public $addrPoolNotAvailableNum;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusReason;

    /**
     * @var int
     */
    public $strategyNotAvailableNum;

    /**
     * @var int
     */
    public $switchToFailoverStrategyNum;
    protected $_name = [
        'addrNotAvailableNum'         => 'AddrNotAvailableNum',
        'addrPoolNotAvailableNum'     => 'AddrPoolNotAvailableNum',
        'requestId'                   => 'RequestId',
        'status'                      => 'Status',
        'statusReason'                => 'StatusReason',
        'strategyNotAvailableNum'     => 'StrategyNotAvailableNum',
        'switchToFailoverStrategyNum' => 'SwitchToFailoverStrategyNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addrNotAvailableNum) {
            $res['AddrNotAvailableNum'] = $this->addrNotAvailableNum;
        }
        if (null !== $this->addrPoolNotAvailableNum) {
            $res['AddrPoolNotAvailableNum'] = $this->addrPoolNotAvailableNum;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }
        if (null !== $this->strategyNotAvailableNum) {
            $res['StrategyNotAvailableNum'] = $this->strategyNotAvailableNum;
        }
        if (null !== $this->switchToFailoverStrategyNum) {
            $res['SwitchToFailoverStrategyNum'] = $this->switchToFailoverStrategyNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGtmInstanceStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddrNotAvailableNum'])) {
            $model->addrNotAvailableNum = $map['AddrNotAvailableNum'];
        }
        if (isset($map['AddrPoolNotAvailableNum'])) {
            $model->addrPoolNotAvailableNum = $map['AddrPoolNotAvailableNum'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }
        if (isset($map['StrategyNotAvailableNum'])) {
            $model->strategyNotAvailableNum = $map['StrategyNotAvailableNum'];
        }
        if (isset($map['SwitchToFailoverStrategyNum'])) {
            $model->switchToFailoverStrategyNum = $map['SwitchToFailoverStrategyNum'];
        }

        return $model;
    }
}
