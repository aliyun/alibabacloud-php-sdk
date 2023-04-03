<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeGtmInstanceStatusResponseBody extends Model
{
    /**
     * @description The number of unavailable addresses.
     *
     * @example 10
     *
     * @var int
     */
    public $addrNotAvailableNum;

    /**
     * @description The number of unavailable address pools.
     *
     * @example 10
     *
     * @var int
     */
    public $addrPoolNotAvailableNum;

    /**
     * @description The ID of the request.
     *
     * @example 389DFFA3-77A5-4A9E-BF3D-147C6F98A5BA
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the instance. Valid values:
     *
     *   ALLOW: Operations on the instance are allowed.
     *   DENY: Operations on the instance are not allowed.
     *
     * @example ALLOW
     *
     * @var string
     */
    public $status;

    /**
     * @description List of reasons for an instance status. Valid values:
     *
     *   INSTANCE_OPERATE_BLACK_LIST: The instance is in the blacklist.
     *   BETA_INSTANCE: The instance is in public preview.
     *
     * @example ["BETA_INSTANCE"]
     *
     * @var string
     */
    public $statusReason;

    /**
     * @description The number of access policies that are unavailable in the active address pool.
     *
     * @example 10
     *
     * @var int
     */
    public $strategyNotAvailableNum;

    /**
     * @description The number of access policies that fail over to the secondary address pool.
     *
     * @example 10
     *
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
