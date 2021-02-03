<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDnsGtmInstanceStatusResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $addrNotAvailableNum;

    /**
     * @var int
     */
    public $addrPoolGroupNotAvailableNum;

    /**
     * @var int
     */
    public $switchToFailoverStrategyNum;

    /**
     * @var int
     */
    public $strategyNotAvailableNum;

    /**
     * @var int
     */
    public $addrAvailableNum;
    protected $_name = [
        'requestId'                    => 'RequestId',
        'addrNotAvailableNum'          => 'AddrNotAvailableNum',
        'addrPoolGroupNotAvailableNum' => 'AddrPoolGroupNotAvailableNum',
        'switchToFailoverStrategyNum'  => 'SwitchToFailoverStrategyNum',
        'strategyNotAvailableNum'      => 'StrategyNotAvailableNum',
        'addrAvailableNum'             => 'AddrAvailableNum',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('addrNotAvailableNum', $this->addrNotAvailableNum, true);
        Model::validateRequired('addrPoolGroupNotAvailableNum', $this->addrPoolGroupNotAvailableNum, true);
        Model::validateRequired('switchToFailoverStrategyNum', $this->switchToFailoverStrategyNum, true);
        Model::validateRequired('strategyNotAvailableNum', $this->strategyNotAvailableNum, true);
        Model::validateRequired('addrAvailableNum', $this->addrAvailableNum, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->addrNotAvailableNum) {
            $res['AddrNotAvailableNum'] = $this->addrNotAvailableNum;
        }
        if (null !== $this->addrPoolGroupNotAvailableNum) {
            $res['AddrPoolGroupNotAvailableNum'] = $this->addrPoolGroupNotAvailableNum;
        }
        if (null !== $this->switchToFailoverStrategyNum) {
            $res['SwitchToFailoverStrategyNum'] = $this->switchToFailoverStrategyNum;
        }
        if (null !== $this->strategyNotAvailableNum) {
            $res['StrategyNotAvailableNum'] = $this->strategyNotAvailableNum;
        }
        if (null !== $this->addrAvailableNum) {
            $res['AddrAvailableNum'] = $this->addrAvailableNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDnsGtmInstanceStatusResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AddrNotAvailableNum'])) {
            $model->addrNotAvailableNum = $map['AddrNotAvailableNum'];
        }
        if (isset($map['AddrPoolGroupNotAvailableNum'])) {
            $model->addrPoolGroupNotAvailableNum = $map['AddrPoolGroupNotAvailableNum'];
        }
        if (isset($map['SwitchToFailoverStrategyNum'])) {
            $model->switchToFailoverStrategyNum = $map['SwitchToFailoverStrategyNum'];
        }
        if (isset($map['StrategyNotAvailableNum'])) {
            $model->strategyNotAvailableNum = $map['StrategyNotAvailableNum'];
        }
        if (isset($map['AddrAvailableNum'])) {
            $model->addrAvailableNum = $map['AddrAvailableNum'];
        }

        return $model;
    }
}
