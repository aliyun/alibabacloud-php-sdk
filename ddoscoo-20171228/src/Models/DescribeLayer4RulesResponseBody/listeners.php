<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RulesResponseBody;

use AlibabaCloud\Tea\Model;

class listeners extends Model
{
    /**
     * @description The origin server port.
     *
     * @example 233
     *
     * @var int
     */
    public $backendPort;

    /**
     * @description The origin mode. Values:
     *
     * - **0**: Indicates the default origin mode.
     * - **1**: Indicates the primary/backup origin mode.
     * @example 0
     *
     * @var int
     */
    public $bakMode;

    /**
     * @description The currently effective origin server type. Values:
     *
     * - **1**: Indicates that the primary origin server settings are in effect (DDoS protection forwards business traffic to the primary origin server IP address).
     * - **2**: Indicates that the backup origin server settings are in effect (DDoS protection forwards business traffic to the backup origin server IP address).
     * @example 1
     *
     * @var int
     */
    public $currentIndex;

    /**
     * @description The IP address of the DDoS protection instance.
     *
     * @example 203.107.XX.XX
     *
     * @var string
     */
    public $eip;

    /**
     * @description The forwarding port.
     *
     * @example 233
     *
     * @var int
     */
    public $frontendPort;

    /**
     * @description The ID of the DDoS protection instance.
     *
     * @example ddoscoo-cn-zvp2ay9b****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Indicates whether the rule was automatically created. Values:
     *
     * - **true**: Indicates that the rule was automatically created by DDoS protection.
     * - **false**: Indicates that the rule was manually created by you.
     * @example false
     *
     * @var bool
     */
    public $isAutoCreate;

    /**
     * @description Payload rule module switch. Values:
     *
     * - 0: Disabled
     * @example 0
     *
     * @var int
     */
    public $payloadRuleEnable;

    /**
     * @description The type of forwarding protocol.
     *
     * @example tcp
     *
     * @var string
     */
    public $protocol;

    /**
     * @description Traffic diversion switch. Values:
     * - **0** Off.
     * - **1** On.
     * @example 0
     *
     * @var int
     */
    public $proxyEnable;

    /**
     * @description Traffic diversion status. Values:
     *
     * - off: Diversion is ineffective
     * @example on
     *
     * @var string
     */
    public $proxyStatus;

    /**
     * @description The list of origin server IP addresses.
     *
     * @var string[]
     */
    public $realServers;

    /**
     * @description The remarks for the port forwarding rule.
     *
     * @example test-remark
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'backendPort'       => 'BackendPort',
        'bakMode'           => 'BakMode',
        'currentIndex'      => 'CurrentIndex',
        'eip'               => 'Eip',
        'frontendPort'      => 'FrontendPort',
        'instanceId'        => 'InstanceId',
        'isAutoCreate'      => 'IsAutoCreate',
        'payloadRuleEnable' => 'PayloadRuleEnable',
        'protocol'          => 'Protocol',
        'proxyEnable'       => 'ProxyEnable',
        'proxyStatus'       => 'ProxyStatus',
        'realServers'       => 'RealServers',
        'remark'            => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendPort) {
            $res['BackendPort'] = $this->backendPort;
        }
        if (null !== $this->bakMode) {
            $res['BakMode'] = $this->bakMode;
        }
        if (null !== $this->currentIndex) {
            $res['CurrentIndex'] = $this->currentIndex;
        }
        if (null !== $this->eip) {
            $res['Eip'] = $this->eip;
        }
        if (null !== $this->frontendPort) {
            $res['FrontendPort'] = $this->frontendPort;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isAutoCreate) {
            $res['IsAutoCreate'] = $this->isAutoCreate;
        }
        if (null !== $this->payloadRuleEnable) {
            $res['PayloadRuleEnable'] = $this->payloadRuleEnable;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->proxyEnable) {
            $res['ProxyEnable'] = $this->proxyEnable;
        }
        if (null !== $this->proxyStatus) {
            $res['ProxyStatus'] = $this->proxyStatus;
        }
        if (null !== $this->realServers) {
            $res['RealServers'] = $this->realServers;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listeners
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendPort'])) {
            $model->backendPort = $map['BackendPort'];
        }
        if (isset($map['BakMode'])) {
            $model->bakMode = $map['BakMode'];
        }
        if (isset($map['CurrentIndex'])) {
            $model->currentIndex = $map['CurrentIndex'];
        }
        if (isset($map['Eip'])) {
            $model->eip = $map['Eip'];
        }
        if (isset($map['FrontendPort'])) {
            $model->frontendPort = $map['FrontendPort'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsAutoCreate'])) {
            $model->isAutoCreate = $map['IsAutoCreate'];
        }
        if (isset($map['PayloadRuleEnable'])) {
            $model->payloadRuleEnable = $map['PayloadRuleEnable'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['ProxyEnable'])) {
            $model->proxyEnable = $map['ProxyEnable'];
        }
        if (isset($map['ProxyStatus'])) {
            $model->proxyStatus = $map['ProxyStatus'];
        }
        if (isset($map['RealServers'])) {
            if (!empty($map['RealServers'])) {
                $model->realServers = $map['RealServers'];
            }
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
