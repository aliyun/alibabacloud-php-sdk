<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsGtmAddressPoolRequest\addr;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsGtmAddressPoolRequest\ispCityNode;
use AlibabaCloud\Tea\Model;

class AddDnsGtmAddressPoolRequest extends Model
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
     * @example 1
     *
     * @var int
     */
    public $evaluationCount;

    /**
     * @description The ID of the GTM instance for which you want to create an address pool.
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
     * @description The monitored nodes.
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
     * @description The load balancing policy for the address pool. Valid values:
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
     * @description The extended information, that is, the parameters required for the protocol. Different protocols require different parameters:
     *
     *   HTTP or HTTPS:
     *
     *   port: the port to check.
     *
     *   host: the host configuration.
     *
     *   path: the health check URL.
     *
     *   code: the status code threshold. If the returned status code is greater than the specified threshold, the application service is deemed abnormal.
     *
     *   failureRate: the failure rate.
     *
     *   sni: specifies whether to enable Server Name Indication (SNI). This parameter is only required for the HTTPS protocol. Valid values:
     *
     *   true: enables SNI.
     *   Other value: disables SNI.
     *
     *   nodeType: the type of the monitored node when the address pool type is DOMAIN. Valid values:
     *
     *   IPV4
     *   IPV6
     *
     *   PING:
     *
     *   failureRate: the failure rate.
     *
     *   packetNum: the number of ping packets.
     *
     *   packetLossRate: the loss rate of ping packets.
     *
     *   nodeType: the type of the monitored node when the address pool type is DOMAIN. Valid values:
     *
     *   IPV4
     *   IPV6
     *
     *   TCP:
     *
     *   port: the port to check.
     *
     *   failureRate: the failure rate.
     *
     *   nodeType: the type of the monitored node when the address pool type is DOMAIN. Valid values:
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
     * @description Specifies whether to enable the health check. If this parameter is set to OPEN, the system validates the health check configuration. If this parameter is set to CLOSE, the health check configuration is discarded. Default value: CLOSE. Valid values:
     *
     *   OPEN: enables the health check.
     *   CLOSE: disables the health check.
     *
     * @example open
     *
     * @var string
     */
    public $monitorStatus;

    /**
     * @description The name of the address pool that you want to create.
     *
     * @example test
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
     * @example http
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The health check timeout period. Unit: milliseconds.
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
