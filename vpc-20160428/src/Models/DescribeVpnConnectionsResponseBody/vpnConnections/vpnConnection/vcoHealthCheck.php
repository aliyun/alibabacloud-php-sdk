<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponseBody\vpnConnections\vpnConnection;

use AlibabaCloud\Tea\Model;

class vcoHealthCheck extends Model
{
    /**
     * @description The destination IP address.
     *
     * @example 192.168.0.1
     *
     * @var string
     */
    public $dip;

    /**
     * @description Indicates whether health checks are enabled.
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var string
     */
    public $enable;

    /**
     * @description The interval between two consecutive health checks. Unit: seconds.
     *
     * @example 2
     *
     * @var int
     */
    public $interval;

    /**
     * @description Indicates whether advertised routes are withdrawn when the health check fails.
     *
     *   **revoke_route**: yes
     *   **reserve_route**: no
     *
     * @example revoke_route
     *
     * @var string
     */
    public $policy;

    /**
     * @description The maximum number of health check retries.
     *
     * @example 3
     *
     * @var int
     */
    public $retry;

    /**
     * @description The source IP address.
     *
     * @example 192.168.0.50
     *
     * @var string
     */
    public $sip;

    /**
     * @description The status of the health check.
     *
     *   **success**: normal
     *   **failed**: abnormal
     *
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'dip'      => 'Dip',
        'enable'   => 'Enable',
        'interval' => 'Interval',
        'policy'   => 'Policy',
        'retry'    => 'Retry',
        'sip'      => 'Sip',
        'status'   => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dip) {
            $res['Dip'] = $this->dip;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->retry) {
            $res['Retry'] = $this->retry;
        }
        if (null !== $this->sip) {
            $res['Sip'] = $this->sip;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vcoHealthCheck
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dip'])) {
            $model->dip = $map['Dip'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Retry'])) {
            $model->retry = $map['Retry'];
        }
        if (isset($map['Sip'])) {
            $model->sip = $map['Sip'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
