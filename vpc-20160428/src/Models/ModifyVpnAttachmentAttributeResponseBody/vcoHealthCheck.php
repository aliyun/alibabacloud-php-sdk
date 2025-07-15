<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class vcoHealthCheck extends Model
{
    /**
     * @description The destination IP address that is used for health checks.
     *
     * @example 192.168.1.1
     *
     * @var string
     */
    public $dip;

    /**
     * @description Indicates whether the health check feature is enabled for the IPsec-VPN connection. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var string
     */
    public $enable;

    /**
     * @description The interval between two consecutive health check retries. Unit: seconds.
     *
     * @example 3
     *
     * @var int
     */
    public $interval;

    /**
     * @description Indicates whether advertised routes are withdrawn when the health check fails. Valid values:
     *
     *   **revoke_route**: Advertised routes are withdrawn.
     *   **reserve_route**: Advertised routes are not withdrawn.
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
     * @description The source IP address that is used for health checks.
     *
     * @example 10.1.1.1
     *
     * @var string
     */
    public $sip;
    protected $_name = [
        'dip' => 'Dip',
        'enable' => 'Enable',
        'interval' => 'Interval',
        'policy' => 'Policy',
        'retry' => 'Retry',
        'sip' => 'Sip',
    ];

    public function validate() {}

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

        return $model;
    }
}
