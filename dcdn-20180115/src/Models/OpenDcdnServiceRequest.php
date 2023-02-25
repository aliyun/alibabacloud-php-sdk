<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class OpenDcdnServiceRequest extends Model
{
    /**
     * @description The metering method of DCDN. Valid values:
     *
     *   **PayByTraffic**: pay-by-traffic
     *   **PayByBandwidth**: pay-by-bandwidth
     *
     * @example PayByTraffic
     *
     * @var string
     */
    public $billType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The metering method of WebSocket. Default value: off. Valid values:
     *
     *   **websockettraffic**: pay-by-data-transfer
     *   **websocketbps**: pay-by-bandwidth
     *
     * @example websockettraffic
     *
     * @var string
     */
    public $websocketBillType;
    protected $_name = [
        'billType'          => 'BillType',
        'ownerId'           => 'OwnerId',
        'securityToken'     => 'SecurityToken',
        'websocketBillType' => 'WebsocketBillType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billType) {
            $res['BillType'] = $this->billType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->websocketBillType) {
            $res['WebsocketBillType'] = $this->websocketBillType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OpenDcdnServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillType'])) {
            $model->billType = $map['BillType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['WebsocketBillType'])) {
            $model->websocketBillType = $map['WebsocketBillType'];
        }

        return $model;
    }
}
