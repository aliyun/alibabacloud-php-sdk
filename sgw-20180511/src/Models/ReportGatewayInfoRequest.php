<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class ReportGatewayInfoRequest extends Model
{
    /**
     * @example 28c07861-a93b-4aa2-ae3a-3f7b7e7f6184
     *
     * @var string
     */
    public $clientUUID;

    /**
     * @example gw-1234567890abcd
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @example running
     *
     * @var string
     */
    public $gatewayStatus;

    /**
     * @example {"ReadIOPS":16,"OSSStorageUsage":2331983505,"CPUSys":4,"CPUUser":24,"CPUIdle":72,"DiskWrite":16384,"NetRecv":3071,"NetSend":5525,"UsedCacheSize":181395456,"WriteIOPS":4,"MemUsed":4340056064,"DiskRead":348160,"MemFree":498073600}
     *
     * @var string
     */
    public $info;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example 1528436020
     *
     * @var int
     */
    public $time;
    protected $_name = [
        'clientUUID'    => 'ClientUUID',
        'gatewayId'     => 'GatewayId',
        'gatewayStatus' => 'GatewayStatus',
        'info'          => 'Info',
        'securityToken' => 'SecurityToken',
        'time'          => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientUUID) {
            $res['ClientUUID'] = $this->clientUUID;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayStatus) {
            $res['GatewayStatus'] = $this->gatewayStatus;
        }
        if (null !== $this->info) {
            $res['Info'] = $this->info;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReportGatewayInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientUUID'])) {
            $model->clientUUID = $map['ClientUUID'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayStatus'])) {
            $model->gatewayStatus = $map['GatewayStatus'];
        }
        if (isset($map['Info'])) {
            $model->info = $map['Info'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
