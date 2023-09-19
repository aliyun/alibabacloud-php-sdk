<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHostAvailabilityRequest;

use AlibabaCloud\Tea\Model;

class taskOption extends Model
{
    /**
     * @description The header of the HTTP request. Format: `Parameter name:Parameter value`. Separate multiple parameters with carriage return characters. Example:
     *
     * params2:value2
     * @example params1:value1
     *
     * @var string
     */
    public $httpHeader;

    /**
     * @description The HTTP request method. Valid values:
     *
     *   GET
     *   POST
     *   HEAD
     *
     * > This parameter must be specified when TaskType is set to HTTP. For more information about how to configure the TaskType parameter, see [CreateHostAvailability](~~115317~~).
     * @example GET
     *
     * @var string
     */
    public $httpMethod;

    /**
     * @description The method to trigger an alert. The alert can be triggered based on whether the specified alert rule is included in the response body. Valid values:
     *
     *   true: If the HTTP response body includes the alert rule, an alert is triggered.
     *   false: If the HTTP response does not include the alert rule, an alert is triggered.
     *
     * > This parameter must be specified when TaskType is set to HTTP. For more information about how to configure the TaskType parameter, see [CreateHostAvailability](~~115317~~).
     * @example true
     *
     * @var bool
     */
    public $httpNegative;

    /**
     * @description The content of the HTTP POST request.
     *
     * @example params1=value1
     *
     * @var string
     */
    public $httpPostContent;

    /**
     * @description The character set that is used in the HTTP response.
     *
     * > Only UTF-8 is supported.
     * @example UTF-8
     *
     * @var string
     */
    public $httpResponseCharset;

    /**
     * @description The response to the HTTP request.
     *
     * @example ok
     *
     * @var string
     */
    public $httpResponseMatchContent;

    /**
     * @description The URI that you want to monitor. This parameter must be specified when TaskType is set to HTTP.
     *
     * @example https://www.aliyun.com
     *
     * @var string
     */
    public $httpURI;

    /**
     * @description The interval at which detection requests are sent. Unit: seconds. Valid values: 15, 30, 60, 120, 300, 900, 1800, and 3600.
     *
     * > This parameter is available only for the CloudMonitor agent V3.5.1 or later.
     * @example 60
     *
     * @var int
     */
    public $interval;

    /**
     * @description The domain name or IP address that you want to monitor.
     *
     * > This parameter must be specified when TaskType is set to PING or TELNET. For more information about how to configure the TaskType parameter, see [CreateHostAvailability](~~115317~~).
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
