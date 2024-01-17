<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDnsGtmMonitorRequest\ispCityNode;
use AlibabaCloud\Tea\Model;

class UpdateDnsGtmMonitorRequest extends Model
{
    /**
     * @description The maximum number of consecutive exceptions detected. If the number of consecutive exceptions detected reaches the maximum number, the application service is deemed abnormal.
     *
     * @example 2
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
     * @description The ID of the health check configuration.
     *
     * @example MonitorConfigId1
     *
     * @var string
     */
    public $monitorConfigId;

    /**
     * @description The extended information. The required parameters vary based on the health check protocol.
     *
     *   HTTP or HTTPS
     *
     *   port: the port that you want to check
     *
     *   host: the host settings
     *
     *   path: the URL path
     *
     *   code: the return code. If the return value of code is greater than the specified value, the health check result is deemed abnormal. For example, if code is set to 400 and the code 404 is returned, the health check result is deemed abnormal.
     *
     *   failureRate: the failure rate
     *
     *   sni: specifies whether to enable server name indication (SNI). This parameter is available only when ProtocolType is set to HTTPS. Valid values:
     *
     *   true: enables SNI.
     *   false: disables SNI.
     *
     *   nodeType: the type of the monitoring node when the address pool type is domain name. Valid values:
     *
     *   IPV4
     *   IPV6
     *
     *   PING
     *
     *   failureRate: the failure rate
     *
     *   packetNum: the number of ping packets
     *
     *   packetLossRate: the loss rate of ping packets
     *
     *   nodeType: the type of the monitoring node when the address pool type is domain name. Valid values:
     *
     *   IPV4
     *   IPV6
     *
     *   TCP
     *
     *   port: the port that you want to check
     *
     *   failureRate: the failure rate
     *
     *   nodeType: the type of the monitoring node when the address pool type is domain name. Valid values:
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
        'evaluationCount'   => 'EvaluationCount',
        'interval'          => 'Interval',
        'ispCityNode'       => 'IspCityNode',
        'lang'              => 'Lang',
        'monitorConfigId'   => 'MonitorConfigId',
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
        if (null !== $this->monitorConfigId) {
            $res['MonitorConfigId'] = $this->monitorConfigId;
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
     * @return UpdateDnsGtmMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['MonitorConfigId'])) {
            $model->monitorConfigId = $map['MonitorConfigId'];
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
