<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRuleAttributesResponseBody\networkRuleAttributes\config;

use AlibabaCloud\Tea\Model;

class sla extends Model
{
    /**
     * @description The maximum number of new connections per second that can be established over the port of the destination instance. Valid values: **100** to **100000**.
     *
     * @example 100000
     *
     * @var int
     */
    public $cps;

    /**
     * @description The status of the Destination New Connection Rate Limit switch. Valid values:
     *
     *   **0**: The switch is turned off.
     *   **1**: The switch is turned on.
     *
     * @example 1
     *
     * @var int
     */
    public $cpsEnable;

    /**
     * @description The maximum number of concurrent connections that can be established over the port of the destination instance. Valid values: **1000** to **1000000**.
     *
     * @example 1000000
     *
     * @var int
     */
    public $maxconn;

    /**
     * @description The status of the Destination Concurrent Connection Rate Limit switch. Valid values:
     *
     *   **0**: The switch is turned off.
     *   **1**: The switch is turned on.
     *
     * @example 0
     *
     * @var int
     */
    public $maxconnEnable;
    protected $_name = [
        'cps'           => 'Cps',
        'cpsEnable'     => 'CpsEnable',
        'maxconn'       => 'Maxconn',
        'maxconnEnable' => 'MaxconnEnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cps) {
            $res['Cps'] = $this->cps;
        }
        if (null !== $this->cpsEnable) {
            $res['CpsEnable'] = $this->cpsEnable;
        }
        if (null !== $this->maxconn) {
            $res['Maxconn'] = $this->maxconn;
        }
        if (null !== $this->maxconnEnable) {
            $res['MaxconnEnable'] = $this->maxconnEnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sla
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cps'])) {
            $model->cps = $map['Cps'];
        }
        if (isset($map['CpsEnable'])) {
            $model->cpsEnable = $map['CpsEnable'];
        }
        if (isset($map['Maxconn'])) {
            $model->maxconn = $map['Maxconn'];
        }
        if (isset($map['MaxconnEnable'])) {
            $model->maxconnEnable = $map['MaxconnEnable'];
        }

        return $model;
    }
}
