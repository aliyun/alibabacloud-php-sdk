<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmAddressPoolRequest\addr;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmAddressPoolRequest\ispCityNode;
use AlibabaCloud\Tea\Model;

class AddGtmAddressPoolRequest extends Model
{
    /**
     * @description The addresses in the address pool.
     *
     * @var addr[]
     */
    public $addr;

    /**
     * @description The maximum number of consecutive exceptions detected. If the number of consecutive exceptions detected reaches the maximum number, the application service is deemed abnormal.
     *
     * @example 2
     *
     * @var int
     */
    public $evaluationCount;

    /**
     * @description The ID of the GTM instance for which you want to create an address pool.
     *
     * @example gtm-cn-xxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The health check interval. Unit: seconds. Set the value to 60.
     *
     * @example 60
     *
     * @var int
     */
    public $interval;

    /**
     * @description The monitored nodes.
     *
     * @var ispCityNode[]
     */
    public $ispCityNode;

    /**
     * @description The language of the values of specific response parameters.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The minimum number of available addresses in the address pool.
     *
     * @example 2
     *
     * @var int
     */
    public $minAvailableAddrNum;

    /**
     * @description The extended information, that is, the parameters required for the protocol. Different protocols require different parameters:
     *
     * HTTP or HTTPS:
     *
     *   port: the port to check.
     *   failureRate: the failure rate.
     *   code: the status code threshold. If the returned status code is greater than the specified threshold, the application service is deemed abnormal. Valid values: 400 and 500.
     *   host: the host configuration.
     *   path: the health check URL.
     *
     * PING:
     *
     *   packetNum: the number of ping packets.
     *   packetLossRate: the loss rate of ping packets.
     *   failureRate: the failure rate.
     *
     * TCP:
     *
     *   port: the port to check.
     *   failureRate: the failure rate.
     *
     * @example {"host":"aliyun.com","port":80}
     *
     * @var string
     */
    public $monitorExtendInfo;

    /**
     * @description Specifies whether to enable the health check. Valid values:
     *
     *   **OPEN**: enables the health check.
     *   **CLOSE**: disables the health check. This is the default value.
     *
     * @example OPEN
     *
     * @var string
     */
    public $monitorStatus;

    /**
     * @description The name of the address pool that you want to create.
     *
     * @example Alibaba Cloud cluster
     *
     * @var string
     */
    public $name;

    /**
     * @description The protocol used for the health check. Valid values:
     *
     *   HTTP
     *   HTTPS
     *   PING
     *   TCP
     *
     * @example HTTPS
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The health check timeout period. Unit: milliseconds. Valid values: 2000, 3000, 5000, and 10000.
     *
     * @example 60
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The type of the address pool. Valid values:
     *
     *   **IP**: IPv4 address
     *   **DOMAIN**: domain name
     *
     * @example IP
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'addr'                => 'Addr',
        'evaluationCount'     => 'EvaluationCount',
        'instanceId'          => 'InstanceId',
        'interval'            => 'Interval',
        'ispCityNode'         => 'IspCityNode',
        'lang'                => 'Lang',
        'minAvailableAddrNum' => 'MinAvailableAddrNum',
        'monitorExtendInfo'   => 'MonitorExtendInfo',
        'monitorStatus'       => 'MonitorStatus',
        'name'                => 'Name',
        'protocolType'        => 'ProtocolType',
        'timeout'             => 'Timeout',
        'type'                => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addr) {
            $res['Addr'] = [];
            if (null !== $this->addr && \is_array($this->addr)) {
                $n = 0;
                foreach ($this->addr as $item) {
                    $res['Addr'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->ispCityNode) {
            $res['IspCityNode'] = [];
            if (null !== $this->ispCityNode && \is_array($this->ispCityNode)) {
                $n = 0;
                foreach ($this->ispCityNode as $item) {
                    $res['IspCityNode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->minAvailableAddrNum) {
            $res['MinAvailableAddrNum'] = $this->minAvailableAddrNum;
        }
        if (null !== $this->monitorExtendInfo) {
            $res['MonitorExtendInfo'] = $this->monitorExtendInfo;
        }
        if (null !== $this->monitorStatus) {
            $res['MonitorStatus'] = $this->monitorStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddGtmAddressPoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Addr'])) {
            if (!empty($map['Addr'])) {
                $model->addr = [];
                $n           = 0;
                foreach ($map['Addr'] as $item) {
                    $model->addr[$n++] = null !== $item ? addr::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['IspCityNode'])) {
            if (!empty($map['IspCityNode'])) {
                $model->ispCityNode = [];
                $n                  = 0;
                foreach ($map['IspCityNode'] as $item) {
                    $model->ispCityNode[$n++] = null !== $item ? ispCityNode::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MinAvailableAddrNum'])) {
            $model->minAvailableAddrNum = $map['MinAvailableAddrNum'];
        }
        if (isset($map['MonitorExtendInfo'])) {
            $model->monitorExtendInfo = $map['MonitorExtendInfo'];
        }
        if (isset($map['MonitorStatus'])) {
            $model->monitorStatus = $map['MonitorStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
