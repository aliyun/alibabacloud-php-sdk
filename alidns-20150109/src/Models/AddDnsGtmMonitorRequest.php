<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsGtmMonitorRequest\ispCityNode;
use AlibabaCloud\Tea\Model;

class AddDnsGtmMonitorRequest extends Model
{
    /**
     * @description The ID of the address pool.
     *
     * @example pool1
     *
     * @var string
     */
    public $addrPoolId;

    /**
     * @description The maximum number of consecutive exceptions detected. If the number of consecutive exceptions detected reaches the maximum number, the application service is deemed abnormal.
     *
     * @example 1
     *
     * @var int
     */
    public $evaluationCount;

    /**
     * @description The health check interval. Unit: seconds.
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
     * @description The language of the values of specific response parameters. Default value: en. Valid values: en, zh, and ja.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

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
     *   false: disables SNI.
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
     * @example 30000
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'addrPoolId'        => 'AddrPoolId',
        'evaluationCount'   => 'EvaluationCount',
        'interval'          => 'Interval',
        'ispCityNode'       => 'IspCityNode',
        'lang'              => 'Lang',
        'monitorExtendInfo' => 'MonitorExtendInfo',
        'protocolType'      => 'ProtocolType',
        'timeout'           => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addrPoolId) {
            $res['AddrPoolId'] = $this->addrPoolId;
        }
        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
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
        if (null !== $this->monitorExtendInfo) {
            $res['MonitorExtendInfo'] = $this->monitorExtendInfo;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDnsGtmMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddrPoolId'])) {
            $model->addrPoolId = $map['AddrPoolId'];
        }
        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
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
        if (isset($map['MonitorExtendInfo'])) {
            $model->monitorExtendInfo = $map['MonitorExtendInfo'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
