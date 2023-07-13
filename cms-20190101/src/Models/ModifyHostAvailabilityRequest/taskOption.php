<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHostAvailabilityRequest;

use AlibabaCloud\Tea\Model;

class taskOption extends Model
{
    /**
     * @description The alert notification methods. Valid values:
     *
     * 0: Alert notifications are sent by using emails and DingTalk chatbots.
     * @example params1:value1
     *
     * @var string
     */
    public $httpHeader;

    /**
     * @description The consecutive number of times for which the metric value meets the alert condition before an alert is triggered. Valid values of N: 1 to 21.
     *
     * @example GET
     *
     * @var string
     */
    public $httpMethod;

    /**
     * @description The level of the alert. Valid values:
     *
     *   INFO: information
     *   WARN: warning
     *   CRITICAL: critical
     *
     * @example true
     *
     * @var bool
     */
    public $httpNegative;

    /**
     * @description The domain name or IP address that you want to monitor.
     *
     * >  If the TaskType parameter is set to PING or TELNET, this parameter is required. For more information about how to set the TaskType parameter, see [CreateHostAvailability](~~115317~~).
     * @example params1=value1
     *
     * @var string
     */
    public $httpPostContent;

    /**
     * @description The error message.
     *
     * @example UTF-8
     *
     * @var string
     */
    public $httpResponseCharset;

    /**
     * @description The ID of the application group.
     *
     * @example ok
     *
     * @var string
     */
    public $httpResponseMatchContent;

    /**
     * @description The operation that you want to perform. Set the value to **ModifyHostAvailability**.
     *
     * @example https://www.aliyun.com
     *
     * @var string
     */
    public $httpURI;

    /**
     * @description The header of the HTTP request. Format: `Parameter name:Parameter value`. Separate multiple parameters with carriage return characters. Example:
     *
     * ```
     * @example 60
     *
     * @var int
     */
    public $interval;

    /**
     * @description The URI that you want to monitor. If the TaskType parameter is set to HTTP, this parameter is required.
     *
     * @example www.aliyun.com
     *
     * @var string
     */
    public $telnetOrPingHost;
    protected $_name = [
        'httpHeader'               => 'HttpHeader',
        'httpMethod'               => 'HttpMethod',
        'httpNegative'             => 'HttpNegative',
        'httpPostContent'          => 'HttpPostContent',
        'httpResponseCharset'      => 'HttpResponseCharset',
        'httpResponseMatchContent' => 'HttpResponseMatchContent',
        'httpURI'                  => 'HttpURI',
        'interval'                 => 'Interval',
        'telnetOrPingHost'         => 'TelnetOrPingHost',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpHeader) {
            $res['HttpHeader'] = $this->httpHeader;
        }
        if (null !== $this->httpMethod) {
            $res['HttpMethod'] = $this->httpMethod;
        }
        if (null !== $this->httpNegative) {
            $res['HttpNegative'] = $this->httpNegative;
        }
        if (null !== $this->httpPostContent) {
            $res['HttpPostContent'] = $this->httpPostContent;
        }
        if (null !== $this->httpResponseCharset) {
            $res['HttpResponseCharset'] = $this->httpResponseCharset;
        }
        if (null !== $this->httpResponseMatchContent) {
            $res['HttpResponseMatchContent'] = $this->httpResponseMatchContent;
        }
        if (null !== $this->httpURI) {
            $res['HttpURI'] = $this->httpURI;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->telnetOrPingHost) {
            $res['TelnetOrPingHost'] = $this->telnetOrPingHost;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskOption
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HttpHeader'])) {
            $model->httpHeader = $map['HttpHeader'];
        }
        if (isset($map['HttpMethod'])) {
            $model->httpMethod = $map['HttpMethod'];
        }
        if (isset($map['HttpNegative'])) {
            $model->httpNegative = $map['HttpNegative'];
        }
        if (isset($map['HttpPostContent'])) {
            $model->httpPostContent = $map['HttpPostContent'];
        }
        if (isset($map['HttpResponseCharset'])) {
            $model->httpResponseCharset = $map['HttpResponseCharset'];
        }
        if (isset($map['HttpResponseMatchContent'])) {
            $model->httpResponseMatchContent = $map['HttpResponseMatchContent'];
        }
        if (isset($map['HttpURI'])) {
            $model->httpURI = $map['HttpURI'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['TelnetOrPingHost'])) {
            $model->telnetOrPingHost = $map['TelnetOrPingHost'];
        }

        return $model;
    }
}
