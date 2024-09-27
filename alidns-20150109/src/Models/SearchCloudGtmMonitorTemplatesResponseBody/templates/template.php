<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmMonitorTemplatesResponseBody\templates;

use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmMonitorTemplatesResponseBody\templates\template\ispCityNodes;
use AlibabaCloud\Tea\Model;

class template extends Model
{
    /**
     * @example 2024-03-23T13:09Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1527690629357
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @example 2
     *
     * @var int
     */
    public $evaluationCount;

    /**
     * @description The extended information. The value of this parameter is a JSON string. The required parameters vary based on the health check protocol. Valid values:
     *
     *   **http(s)**:
     *
     **host**: indicates the Host field of an HTTP or HTTPS request header during an HTTP or HTTPS health check. The parameter value indicates the HTTP website that you want to visit. By default, the value is the primary domain name. You can change the value based on your business requirements.
     *
     **path**: the URL for HTTP or HTTPS health checks. Default value: /.
     *
     **code**: indicates the alert threshold. During an HTTP or HTTPS health check, the system checks whether a web server functions as expected based on the status code that is returned from the web server. If the returned status code is greater than the specified threshold, the corresponding application service address is deemed abnormal. Valid values:
     *
     *   400: indicates an invalid request. If an HTTP or HTTPS request contains invalid request parameters, a web server returns a status code that is greater than 400. If Verification Content is set to "The error code is greater than 400", you must specify an exact URL for the path parameter.
     *   500: indicates a server error. If some exceptions occur on a web server, the web server returns a status code that is greater than 500. The error code that is greater than 500 is used as the alert threshold by default.
     *
     **sni**: indicates whether Server Name Indication (SNI) is enabled for HTTPS. SNI is an extension to the Transport Layer Security (TLS) protocol, which allows a client to specify the host to be connected when the client sends a TLS handshake request. TLS handshakes occur before any data of HTTP requests is sent. Therefore, SNI enables servers to identify the services that clients are attempting to access before certificates are sent. This allows the servers to present correct certificates to the clients. Valid values:
     *
     *   true: SNI is enabled.
     *   false: SNI is disabled.
     *
     **followRedirect**: indicates whether 3XX redirection is followed. Valid values:
     *
     *   true: You are redirected to the destination address if a status code 3XX, such as 301, 302, 303, 307, or 308, is returned.
     *   false: You are not redirected to the destination address.
     *
     *   **ping**:
     *
     **packetNum**: The total number of Internet Control Message Protocol (ICMP) packets that are sent to the address for each ping-based health check. Valid values: 20, 50, and 100.
     *
     **packetLossRate**: The packet loss rate for each ping-based health check. The packet loss rate in a check can be calculated by using the following formula: Packet loss rate = (Number of lost packets/Total number of sent ICMP packets) × 100%. If the packet loss rate reaches the threshold, an alert is triggered. Valid values: 10, 30, 40, 80, 90, and 100.
     *
     * @example {\\"code\\":200,\\"path\\":\\"\\\\index.htm\\",\\"host\\":\\"aliyun.com\\"}
     *
     * @var string
     */
    public $extendInfo;

    /**
     * @example 50
     *
     * @var int
     */
    public $failureRate;

    /**
     * @example 60
     *
     * @var int
     */
    public $interval;

    /**
     * @description The IP address type of health check nodes. Valid values:
     *
     *   IPv4: applicable when the destination address of health checks is an IPv4 address
     *   IPv6: applicable when the destination address of health checks is an IPv6 address
     *
     * @example IPv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description The health check nodes.
     *
     * @var ispCityNodes
     */
    public $ispCityNodes;

    /**
     * @example IPv4-Ping
     *
     * @var string
     */
    public $name;

    /**
     * @example ping
     *
     * @var string
     */
    public $protocol;

    /**
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @example mtp-89518052425100**80
     *
     * @var string
     */
    public $templateId;

    /**
     * @example 5000
     *
     * @var int
     */
    public $timeout;

    /**
     * @example 2024-03-29T13:20Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 1527690629357
     *
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'evaluationCount' => 'EvaluationCount',
        'extendInfo'      => 'ExtendInfo',
        'failureRate'     => 'FailureRate',
        'interval'        => 'Interval',
        'ipVersion'       => 'IpVersion',
        'ispCityNodes'    => 'IspCityNodes',
        'name'            => 'Name',
        'protocol'        => 'Protocol',
        'remark'          => 'Remark',
        'templateId'      => 'TemplateId',
        'timeout'         => 'Timeout',
        'updateTime'      => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
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
        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }
        if (null !== $this->failureRate) {
            $res['FailureRate'] = $this->failureRate;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->ispCityNodes) {
            $res['IspCityNodes'] = null !== $this->ispCityNodes ? $this->ispCityNodes->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
     * @return template
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
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }
        if (isset($map['FailureRate'])) {
            $model->failureRate = $map['FailureRate'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['IspCityNodes'])) {
            $model->ispCityNodes = ispCityNodes::fromMap($map['IspCityNodes']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
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
