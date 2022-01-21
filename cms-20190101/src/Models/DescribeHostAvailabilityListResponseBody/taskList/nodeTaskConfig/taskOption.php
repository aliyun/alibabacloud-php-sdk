<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig;

use AlibabaCloud\Tea\Model;

class taskOption extends Model
{
    /**
     * @var string
     */
    public $httpKeyword;

    /**
     * @var string
     */
    public $httpMethod;

    /**
     * @var bool
     */
    public $httpNegative;

    /**
     * @var string
     */
    public $httpPostContent;

    /**
     * @var string
     */
    public $httpResponseCharset;

    /**
     * @var string
     */
    public $httpURI;

    /**
     * @var int
     */
    public $interval;

    /**
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
