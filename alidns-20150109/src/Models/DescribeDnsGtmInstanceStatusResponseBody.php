<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDnsGtmInstanceStatusResponseBody extends Model
{
    /**
     * @var int
     */
    public $addrAvailableNum;

    /**
     * @var int
     */
    public $addrNotAvailableNum;

    /**
     * @var int
     */
    public $addrPoolGroupNotAvailableNum;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $strategyNotAvailableNum;

    /**
     * @var int
     */
    public $switchToFailoverStrategyNum;
    protected $_name = [
        'addrAvailableNum'             => 'AddrAvailableNum',
        'addrNotAvailableNum'          => 'AddrNotAvailableNum',
        'addrPoolGroupNotAvailableNum' => 'AddrPoolGroupNotAvailableNum',
        'requestId'                    => 'RequestId',
        'strategyNotAvailableNum'      => 'StrategyNotAvailableNum',
        'switchToFailoverStrategyNum'  => 'SwitchToFailoverStrategyNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addrAvailableNum) {
            $res['AddrAvailableNum'] = $this->addrAvailableNum;
        }
        if (null !== $this->addrNotAvailableNum) {
            $res['AddrNotAvailableNum'] = $this->addrNotAvailableNum;
        }
        if (null !== $this->addrPoolGroupNotAvailableNum) {
            $res['AddrPoolGroupNotAvailableNum'] = $this->addrPoolGroupNotAvailableNum;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return DescribeDnsGtmInstanceStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddrAvailableNum'])) {
            $model->addrAvailableNum = $map['AddrAvailableNum'];
        }
        if (isset($map['AddrNotAvailableNum'])) {
            $model->addrNotAvailableNum = $map['AddrNotAvailableNum'];
        }
        if (isset($map['AddrPoolGroupNotAvailableNum'])) {
            $model->addrPoolGroupNotAvailableNum = $map['AddrPoolGroupNotAvailableNum'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
