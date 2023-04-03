<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDnsGtmInstanceStatusResponseBody extends Model
{
    /**
     * @description The number of available addresses.
     *
     * @example 1
     *
     * @var int
     */
    public $addrAvailableNum;

    /**
     * @description The number of unavailable addresses.
     *
     * @example 1
     *
     * @var int
     */
    public $addrNotAvailableNum;

    /**
     * @description The number of unavailable address pool groups.
     *
     * @example 1
     *
     * @var int
     */
    public $addrPoolGroupNotAvailableNum;

    /**
     * @description The ID of the request.
     *
     * @example 389DFFA3-77A5-4A9E-BF3D-147C6F98A5BA
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of access policies that are unavailable in the current active address pool group.
     *
     * @example 1
     *
     * @var int
     */
    public $strategyNotAvailableNum;

    /**
     * @description The number of access policies switched to the secondary address pool group.
     *
     * @example 1
     *
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
