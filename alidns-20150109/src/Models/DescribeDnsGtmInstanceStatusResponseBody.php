<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDnsGtmInstanceStatusResponseBody extends Model
{
    /**
     * @var int
     */
    public $strategyNotAvailableNum;

    /**
     * @var int
     */
    public $addrAvailableNum;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $switchToFailoverStrategyNum;

    /**
     * @var int
     */
    public $addrNotAvailableNum;

    /**
     * @var int
     */
    public $addrPoolGroupNotAvailableNum;
    protected $_name = [
        'strategyNotAvailableNum'      => 'StrategyNotAvailableNum',
        'addrAvailableNum'             => 'AddrAvailableNum',
        'requestId'                    => 'RequestId',
        'switchToFailoverStrategyNum'  => 'SwitchToFailoverStrategyNum',
        'addrNotAvailableNum'          => 'AddrNotAvailableNum',
        'addrPoolGroupNotAvailableNum' => 'AddrPoolGroupNotAvailableNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->strategyNotAvailableNum) {
            $res['StrategyNotAvailableNum'] = $this->strategyNotAvailableNum;
        }
        if (null !== $this->addrAvailableNum) {
            $res['AddrAvailableNum'] = $this->addrAvailableNum;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->switchToFailoverStrategyNum) {
            $res['SwitchToFailoverStrategyNum'] = $this->switchToFailoverStrategyNum;
        }
        if (null !== $this->addrNotAvailableNum) {
            $res['AddrNotAvailableNum'] = $this->addrNotAvailableNum;
        }
        if (null !== $this->addrPoolGroupNotAvailableNum) {
            $res['AddrPoolGroupNotAvailableNum'] = $this->addrPoolGroupNotAvailableNum;
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
        if (isset($map['StrategyNotAvailableNum'])) {
            $model->strategyNotAvailableNum = $map['StrategyNotAvailableNum'];
        }
        if (isset($map['AddrAvailableNum'])) {
            $model->addrAvailableNum = $map['AddrAvailableNum'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SwitchToFailoverStrategyNum'])) {
            $model->switchToFailoverStrategyNum = $map['SwitchToFailoverStrategyNum'];
        }
        if (isset($map['AddrNotAvailableNum'])) {
            $model->addrNotAvailableNum = $map['AddrNotAvailableNum'];
        }
        if (isset($map['AddrPoolGroupNotAvailableNum'])) {
            $model->addrPoolGroupNotAvailableNum = $map['AddrPoolGroupNotAvailableNum'];
        }

        return $model;
    }
}
