<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorConfigResponseBody\ispCityNodes;
use AlibabaCloud\Tea\Model;

class DescribeDnsGtmMonitorConfigResponseBody extends Model
{
    /**
     * @description The time when the health check task was created.
     *
     * @example 2017-12-28T13:08Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The timestamp that indicates when the health check task was created.
     *
     * @example 1527690629357
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The number of consecutive times of failed health check attempts.
     *
     * @example 1
     *
     * @var int
     */
    public $evaluationCount;

    /**
     * @description The interval at which the health check task is executed. Unit: seconds.
     *
     * @example 1
     *
     * @var int
     */
    public $interval;

    /**
     * @description The monitored node.
     *
     * @var ispCityNodes
     */
    public $ispCityNodes;

    /**
     * @description The ID of the health check task.
     *
     * @example MonitorConfigId1
     *
     * @var string
     */
    public $monitorConfigId;

    /**
     * @description The extended information. The following parameters are required for different health check protocols:
     *
     *   HTTP or HTTPS:
     *
     *   port: the check port.
     *
     *   host: the host settings.
     *
     *   path: the URL path.
     *
     *   code: the return code greater than the specified value.
     *
     *   failureRate: the failure rate.
     *
     *   sni: specifies whether to enable server name indication (SNI). This parameter is used only for the HTTPS protocol. Valid values:
     *
     *   true: enable SNI.
     *   false: disable SNI.
     *
     *   nodeType: the type of the node to monitor when the address pool type is DOMAIN. Valid values:
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
     *   nodeType: the type of the node to monitor when the address pool type is DOMAIN. Valid values:
     *
     *   IPV4
     *   IPV6
     *
     *   TCP:
     *
     *   port: the check port.
     *
     *   failureRate: the failure rate.
     *
     *   nodeType: the type of the node to monitor when the address pool type is DOMAIN. Valid values:
     *
     *   IPV4
     *   IPV6
     *
     * @example {\\"code\\":200,\\"path\\":\\"\\\\index.htm\\",\\"host\\":\\"aliyun.com\\"}
     *
     * @var string
     */
    public $monitorExtendInfo;

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
     * @description The ID of the request.
     *
     * @example 6856BCF6-11D6-4D7E-AC53-FD579933522B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The timeout period. Unit: milliseconds.
     *
     * @example 3000
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The time when the information about the health check task was updated.
     *
     * @example 2018-01-03T08:57Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The timestamp that indicates when the information about the health check task was updated.
     *
     * @example 1527690629357
     *
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'createTime'        => 'CreateTime',
        'createTimestamp'   => 'CreateTimestamp',
        'evaluationCount'   => 'EvaluationCount',
        'interval'          => 'Interval',
        'ispCityNodes'      => 'IspCityNodes',
        'monitorConfigId'   => 'MonitorConfigId',
        'monitorExtendInfo' => 'MonitorExtendInfo',
        'protocolType'      => 'ProtocolType',
        'requestId'         => 'RequestId',
        'timeout'           => 'Timeout',
        'updateTime'        => 'UpdateTime',
        'updateTimestamp'   => 'UpdateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->ispCityNodes) {
            $res['IspCityNodes'] = null !== $this->ispCityNodes ? $this->ispCityNodes->toMap() : null;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDnsGtmMonitorConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['IspCityNodes'])) {
            $model->ispCityNodes = ispCityNodes::fromMap($map['IspCityNodes']);
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }

        return $model;
    }
}
