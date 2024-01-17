<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsGtmAddressPoolRequest\addr;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsGtmAddressPoolRequest\ispCityNode;
use AlibabaCloud\Tea\Model;

class AddDnsGtmAddressPoolRequest extends Model
{
    /**
     * @description The address pools.
     *
     * @var addr[]
     */
    public $addr;

    /**
     * @description The number of consecutive failures.
     *
     * @example 1
     *
     * @var int
     */
    public $evaluationCount;

    /**
     * @description The instance ID.
     *
     * @example instance1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The health check interval. Unit: seconds.
     *
     * @example 1
     *
     * @var int
     */
    public $interval;

    /**
     * @description The nodes for monitoring.
     *
     * @var ispCityNode[]
     */
    public $ispCityNode;

    /**
     * @description The language of the values of specific response parameters. Default value: en. Valid values: en, zh, and ja.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The load balancing policy of the address pool. Valid values:
     *
     *   ALL_RR: returns all addresses.
     *   RATIO: returns addresses by weight.
     *
     * @example all_rr
     *
     * @var string
     */
    public $lbaStrategy;

    /**
     * @description The extended information. The required parameters vary based on the value of ProtocolType.
     *
     *   When ProtocolType is set to HTTP or HTTPS:
     *
     *   port: the port that you want to check
     *
     *   host: the host settings
     *
     *   path: the URL path
     *
     *   code: the return code. The health check result is deemed abnormal if the returned value is greater than the specified value.
     *
     *   failureRate: the failure rate
     *
     *   sni: specifies whether to enable server name indication (SNI). This parameter is available only when ProtocolType is set to HTTPS. Valid values:
     *
     *   true: enables SNI.
     *   other: disables SNI.
     *
     *   nodeType: the type of the node for monitoring when Type is set to DOMAIN. Valid values:
     *
     *   IPV4
     *   IPV6
     *
     *   When ProtocolType is set to PING:
     *
     *   failureRate: the failure rate
     *
     *   packetNum: the number of ping packets
     *
     *   packetLossRate: the loss rate of ping packets
     *
     *   nodeType: the type of the node for monitoring when Type is set to DOMAIN. Valid values:
     *
     *   IPV4
     *   IPV6
     *
     *   When ProtocolType is set to TCP:
     *
     *   port: the port that you want to check
     *
     *   failureRate: the failure rate
     *
     *   nodeType: the type of the node for monitoring when Type is set to DOMAIN. Valid values:
     *
     *   IPV4
     *   IPV6
     *
     * @example {\"code\":200,\"path\":\"\\index.htm\",\"host\":\"aliyun.com\"}
     *
     * @var string
     */
    public $monitorExtendInfo;

    /**
     * @description Specifies whether to enable the health check feature. If you set this parameter to OPEN, the system verifies the health check configurations. If you set this parameter to CLOSE, the system discards the health check configurations. Default value: CLOSE. Valid values:
     *
     *   OPEN: enables the health check feature.
     *   CLOSE: disables the health check feature.
     *
     * @example open
     *
     * @var string
     */
    public $monitorStatus;

    /**
     * @description The name of the address pool.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The health check protocol. Valid values:
     *
     *   HTTP
     *   HTTPS
     *   PING
     *   TCP
     *
     * @example http
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The timeout period. Unit: milliseconds.
     *
     * @example 1
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The type of the address pool. Valid values:
     *
     *   IPV4: IPv4 address
     *   IPV6: IPv6 address
     *   DOMAIN: domain name
     *
     * @example ipv4
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'addr'              => 'Addr',
        'evaluationCount'   => 'EvaluationCount',
        'instanceId'        => 'InstanceId',
        'interval'          => 'Interval',
        'ispCityNode'       => 'IspCityNode',
        'lang'              => 'Lang',
        'lbaStrategy'       => 'LbaStrategy',
        'monitorExtendInfo' => 'MonitorExtendInfo',
        'monitorStatus'     => 'MonitorStatus',
        'name'              => 'Name',
        'protocolType'      => 'ProtocolType',
        'timeout'           => 'Timeout',
        'type'              => 'Type',
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
        if (null !== $this->lbaStrategy) {
            $res['LbaStrategy'] = $this->lbaStrategy;
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
     * @return AddDnsGtmAddressPoolRequest
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
        if (isset($map['LbaStrategy'])) {
            $model->lbaStrategy = $map['LbaStrategy'];
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
