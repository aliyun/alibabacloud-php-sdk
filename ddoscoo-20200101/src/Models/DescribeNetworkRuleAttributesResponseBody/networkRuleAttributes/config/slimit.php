<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRuleAttributesResponseBody\networkRuleAttributes\config;

use AlibabaCloud\Tea\Model;

class slimit extends Model
{
    /**
     * @description The bandwidth limit for a source IP address. Valid values: **1024** to **268435456**. Unit: bytes/s. Default value: **0**, which indicates that the bandwidth for a source IP address is unlimited.
     *
     * @example 0
     *
     * @var int
     */
    public $bps;

    /**
     * @description The maximum number of new connections per second that can be initiated from a source IP address. Valid values: **1** to **500000**.
     *
     * @example 0
     *
     * @var int
     */
    public $cps;

    /**
     * @description The status of the Source New Connection Rate Limit switch. Valid values:
     *
     *   **0**: The switch is turned off.
     *   **1**: The switch is turned on.
     *
     * @example 0
     *
     * @var int
     */
    public $cpsEnable;

    /**
     * @description The mode of the Source New Connection Rate Limit switch. Valid values:
     *
     *   **1**: the manual mode
     *   **2**: the automatic mode
     *
     * @example 1
     *
     * @var int
     */
    public $cpsMode;

    /**
     * @description The maximum number of concurrent connections initiated from a source IP address. Valid values: **1** to **500000**.
     *
     * @example 0
     *
     * @var int
     */
    public $maxconn;

    /**
     * @description The status of the Source Concurrent Connection Rate Limit switch. Valid values:
     *
     *   **0**: The switch is turned off.
     *   **1**: The switch is turned on.
     *
     * @example 0
     *
     * @var int
     */
    public $maxconnEnable;

    /**
     * @description The packets per second (pps) limit for a source IP address. Valid values: **1** to **100000**. Unit: packets/s. Default value: **0**, which indicates that the pps for a source IP address is unlimited.
     *
     * @example 0
     *
     * @var int
     */
    public $pps;
    protected $_name = [
        'bps'           => 'Bps',
        'cps'           => 'Cps',
        'cpsEnable'     => 'CpsEnable',
        'cpsMode'       => 'CpsMode',
        'maxconn'       => 'Maxconn',
        'maxconnEnable' => 'MaxconnEnable',
        'pps'           => 'Pps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->cps) {
            $res['Cps'] = $this->cps;
        }
        if (null !== $this->cpsEnable) {
            $res['CpsEnable'] = $this->cpsEnable;
        }
        if (null !== $this->cpsMode) {
            $res['CpsMode'] = $this->cpsMode;
        }
        if (null !== $this->maxconn) {
            $res['Maxconn'] = $this->maxconn;
        }
        if (null !== $this->maxconnEnable) {
            $res['MaxconnEnable'] = $this->maxconnEnable;
        }
        if (null !== $this->pps) {
            $res['Pps'] = $this->pps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slimit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['Cps'])) {
            $model->cps = $map['Cps'];
        }
        if (isset($map['CpsEnable'])) {
            $model->cpsEnable = $map['CpsEnable'];
        }
        if (isset($map['CpsMode'])) {
            $model->cpsMode = $map['CpsMode'];
        }
        if (isset($map['Maxconn'])) {
            $model->maxconn = $map['Maxconn'];
        }
        if (isset($map['MaxconnEnable'])) {
            $model->maxconnEnable = $map['MaxconnEnable'];
        }
        if (isset($map['Pps'])) {
            $model->pps = $map['Pps'];
        }

        return $model;
    }
}
