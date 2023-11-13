<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRuleAttributesResponseBody\networkRuleAttributes;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRuleAttributesResponseBody\networkRuleAttributes\config\cc;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRuleAttributesResponseBody\networkRuleAttributes\config\payloadLen;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRuleAttributesResponseBody\networkRuleAttributes\config\sla;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRuleAttributesResponseBody\networkRuleAttributes\config\slimit;
use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @description The protection policy applied when the number of connections initiated from a source IP address frequently exceeds the limit.
     *
     * @var cc
     */
    public $cc;

    /**
     * @description The status of the Empty Connection switch. Valid values:
     *
     *   **on**: The switch is turned on.
     *   **off**: The switch is turned off.
     *
     * @example off
     *
     * @var string
     */
    public $nodataConn;

    /**
     * @description The settings of the Packet Length Limit policy.
     *
     * @var payloadLen
     */
    public $payloadLen;

    /**
     * @description The timeout period of session persistence. Valid values: **30** to **3600**. Unit: seconds. Default value: **0**, which indicates that session persistence is disabled.
     *
     * @example 0
     *
     * @var int
     */
    public $persistenceTimeout;

    /**
     * @description The settings of the Speed Limit for Destination policy.
     *
     * @var sla
     */
    public $sla;

    /**
     * @description The settings of the Speed Limit for Source policy.
     *
     * @var slimit
     */
    public $slimit;

    /**
     * @description The status of the False Source switch. Valid values:
     *
     *   **on**: The switch is turned on.
     *   **off**: The switch is turned off.
     *
     * @example off
     *
     * @var string
     */
    public $synproxy;
    protected $_name = [
        'cc'                 => 'Cc',
        'nodataConn'         => 'NodataConn',
        'payloadLen'         => 'PayloadLen',
        'persistenceTimeout' => 'PersistenceTimeout',
        'sla'                => 'Sla',
        'slimit'             => 'Slimit',
        'synproxy'           => 'Synproxy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cc) {
            $res['Cc'] = null !== $this->cc ? $this->cc->toMap() : null;
        }
        if (null !== $this->nodataConn) {
            $res['NodataConn'] = $this->nodataConn;
        }
        if (null !== $this->payloadLen) {
            $res['PayloadLen'] = null !== $this->payloadLen ? $this->payloadLen->toMap() : null;
        }
        if (null !== $this->persistenceTimeout) {
            $res['PersistenceTimeout'] = $this->persistenceTimeout;
        }
        if (null !== $this->sla) {
            $res['Sla'] = null !== $this->sla ? $this->sla->toMap() : null;
        }
        if (null !== $this->slimit) {
            $res['Slimit'] = null !== $this->slimit ? $this->slimit->toMap() : null;
        }
        if (null !== $this->synproxy) {
            $res['Synproxy'] = $this->synproxy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cc'])) {
            $model->cc = cc::fromMap($map['Cc']);
        }
        if (isset($map['NodataConn'])) {
            $model->nodataConn = $map['NodataConn'];
        }
        if (isset($map['PayloadLen'])) {
            $model->payloadLen = payloadLen::fromMap($map['PayloadLen']);
        }
        if (isset($map['PersistenceTimeout'])) {
            $model->persistenceTimeout = $map['PersistenceTimeout'];
        }
        if (isset($map['Sla'])) {
            $model->sla = sla::fromMap($map['Sla']);
        }
        if (isset($map['Slimit'])) {
            $model->slimit = slimit::fromMap($map['Slimit']);
        }
        if (isset($map['Synproxy'])) {
            $model->synproxy = $map['Synproxy'];
        }

        return $model;
    }
}
