<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DiagnoseVpnConnectionsResponseBody;

use AlibabaCloud\Tea\Model;

class vpnConnections extends Model
{
    /**
     * @description The cause of the error.
     *
     * @example Phase1 negotiation timeout
     *
     * @var string
     */
    public $failedReason;

    /**
     * @description The error code.
     *
     * @example Phase1NegotiationTimeout
     *
     * @var string
     */
    public $failedReasonCode;

    /**
     * @description The timestamp when the current error occurred on the IPsec-VPN connection. Unit: millisecond.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     * @example 1673581161000
     *
     * @var int
     */
    public $failedTime;

    /**
     * @description If the values of the parameters configured for the IPsec-VPN connection and the peer gateway device do not match, this parameter indicates the value of the parameters configured for the IPsec-VPN connection.
     *
     * @example SHA256
     *
     * @var string
     */
    public $mismatchLocalParam;

    /**
     * @description If the parameter values configured for the IPsec-VPN connection and the peer gateway device do not match, this parameter indicates the value of the parameter configured for the peer gateway device.
     *
     * @example SHA
     *
     * @var string
     */
    public $mismatchRemoteParam;

    /**
     * @description The error level. Valid values:
     *
     *   **Critical**
     *   **Warn**
     *   **Normal**
     *
     * @example Warn
     *
     * @var string
     */
    public $severity;

    /**
     * @description The log information about the error.
     *
     * @example 2023-01-13 11:39:21 vco-bp1spxu8hlcvpd7ry**** [PROTO_ERR]: ikev1.c:1433:isakmp_ph1resend(): phase1 negotiation failed due to time up. [{remote id:4}{ph1: 172.16.0.88[500] <=> 192.168.0.206[500], 172.16.0.88 <=> 192.168.0.206}]
     *
     * @var string
     */
    public $sourceLog;

    /**
     * @description The tunnel ID.
     *
     * @example tun-64n1sr9dig64k6****
     *
     * @var string
     */
    public $tunnelId;

    /**
     * @description The ID of the IPsec-VPN connection.
     *
     * @example vco-bp1spxu8hlcvpd7ry****
     *
     * @var string
     */
    public $vpnConnectionId;
    protected $_name = [
        'failedReason'        => 'FailedReason',
        'failedReasonCode'    => 'FailedReasonCode',
        'failedTime'          => 'FailedTime',
        'mismatchLocalParam'  => 'MismatchLocalParam',
        'mismatchRemoteParam' => 'MismatchRemoteParam',
        'severity'            => 'Severity',
        'sourceLog'           => 'SourceLog',
        'tunnelId'            => 'TunnelId',
        'vpnConnectionId'     => 'VpnConnectionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedReason) {
            $res['FailedReason'] = $this->failedReason;
        }
        if (null !== $this->failedReasonCode) {
            $res['FailedReasonCode'] = $this->failedReasonCode;
        }
        if (null !== $this->failedTime) {
            $res['FailedTime'] = $this->failedTime;
        }
        if (null !== $this->mismatchLocalParam) {
            $res['MismatchLocalParam'] = $this->mismatchLocalParam;
        }
        if (null !== $this->mismatchRemoteParam) {
            $res['MismatchRemoteParam'] = $this->mismatchRemoteParam;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->sourceLog) {
            $res['SourceLog'] = $this->sourceLog;
        }
        if (null !== $this->tunnelId) {
            $res['TunnelId'] = $this->tunnelId;
        }
        if (null !== $this->vpnConnectionId) {
            $res['VpnConnectionId'] = $this->vpnConnectionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpnConnections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedReason'])) {
            $model->failedReason = $map['FailedReason'];
        }
        if (isset($map['FailedReasonCode'])) {
            $model->failedReasonCode = $map['FailedReasonCode'];
        }
        if (isset($map['FailedTime'])) {
            $model->failedTime = $map['FailedTime'];
        }
        if (isset($map['MismatchLocalParam'])) {
            $model->mismatchLocalParam = $map['MismatchLocalParam'];
        }
        if (isset($map['MismatchRemoteParam'])) {
            $model->mismatchRemoteParam = $map['MismatchRemoteParam'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['SourceLog'])) {
            $model->sourceLog = $map['SourceLog'];
        }
        if (isset($map['TunnelId'])) {
            $model->tunnelId = $map['TunnelId'];
        }
        if (isset($map['VpnConnectionId'])) {
            $model->vpnConnectionId = $map['VpnConnectionId'];
        }

        return $model;
    }
}
