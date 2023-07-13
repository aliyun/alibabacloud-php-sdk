<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig;

use AlibabaCloud\Tea\Model;

class taskOption extends Model
{
    /**
     * @description The mute period during which new alerts are not sent even if the trigger conditions are met. Unit: seconds. Default value: 86400.
     *
     * @example OK
     *
     * @var string
     */
    public $httpKeyword;

    /**
     * @description The domain name or IP address that you want to monitor.
     *
     * @example GET
     *
     * @var string
     */
    public $httpMethod;

    /**
     * @description The end of the time period during which the alert rule is effective. Valid values: 0 to 23.
     *
     * >  Alert notifications are sent based on the specified threshold only if the alert rule is effective.
     * @example true
     *
     * @var bool
     */
    public $httpNegative;

    /**
     * @description The configurations of the alert rule.
     *
     * @example params1=paramsValue1
     *
     * @var string
     */
    public $httpPostContent;

    /**
     * @description The response to the HTTP request.
     *
     * @example UTF-8
     *
     * @var string
     */
    public $httpResponseCharset;

    /**
     * @description The content of the HTTP POST request.
     *
     * @example https://www.aliyun.com
     *
     * @var string
     */
    public $httpURI;

    /**
     * @description The character set that is used in the HTTP response.
     *
     * @example 60
     *
     * @var int
     */
    public $interval;

    /**
     * @description The method to trigger an alert. The alert can be triggered based on whether the specified alert rule is included in the response body. Valid values:
     *
     *   true: If the HTTP response body includes the alert rule, an alert is triggered.
     *   false: If the HTTP response does not include the alert rule, an alert is triggered.
     *
     * @example ssh.aliyun.com
     *
     * @var string
     */
    public $telnetOrPingHost;
    protected $_name = [
        'httpKeyword'         => 'HttpKeyword',
        'httpMethod'          => 'HttpMethod',
        'httpNegative'        => 'HttpNegative',
        'httpPostContent'     => 'HttpPostContent',
        'httpResponseCharset' => 'HttpResponseCharset',
        'httpURI'             => 'HttpURI',
        'interval'            => 'Interval',
        'telnetOrPingHost'    => 'TelnetOrPingHost',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpKeyword) {
            $res['HttpKeyword'] = $this->httpKeyword;
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
        if (isset($map['HttpKeyword'])) {
            $model->httpKeyword = $map['HttpKeyword'];
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
