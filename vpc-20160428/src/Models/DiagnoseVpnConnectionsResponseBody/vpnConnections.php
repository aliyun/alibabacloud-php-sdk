<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DiagnoseVpnConnectionsResponseBody;

use AlibabaCloud\Dara\Model;

class vpnConnections extends Model
{
    /**
     * @var string
     */
    public $failedReason;

    /**
     * @var string
     */
    public $failedReasonCode;

    /**
     * @var int
     */
    public $failedTime;

    /**
     * @var string
     */
    public $mismatchLocalParam;

    /**
     * @var string
     */
    public $mismatchRemoteParam;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var string
     */
    public $sourceLog;

    /**
     * @var string
     */
    public $tunnelId;

    /**
     * @var string
     */
    public $vpnConnectionId;
    protected $_name = [
        'failedReason' => 'FailedReason',
        'failedReasonCode' => 'FailedReasonCode',
        'failedTime' => 'FailedTime',
        'mismatchLocalParam' => 'MismatchLocalParam',
        'mismatchRemoteParam' => 'MismatchRemoteParam',
        'severity' => 'Severity',
        'sourceLog' => 'SourceLog',
        'tunnelId' => 'TunnelId',
        'vpnConnectionId' => 'VpnConnectionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
