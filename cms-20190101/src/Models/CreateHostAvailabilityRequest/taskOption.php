<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateHostAvailabilityRequest;

use AlibabaCloud\Tea\Model;

class taskOption extends Model
{
    /**
     * @var string
     */
    public $httpHeader;

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
    public $httpResponseMatchContent;

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
