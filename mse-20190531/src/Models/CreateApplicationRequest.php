<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class CreateApplicationRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The name of the application.
     *
     * @example spring-cloud-a
     *
     * @var string
     */
    public $appName;

    /**
     * @description The programming language of the application.
     *
     * @example JAVA
     *
     * @var string
     */
    public $language;

    /**
     * @description MSE命名空间名字。
     *
     * @example prod
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The region to which the application belongs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description Specifies whether to start the switch.
     *
     * @example true
     *
     * @var string
     */
    public $sentinelEnable;

    /**
     * @description The service where the application is deployed. A value of ACK indicates Container Service for Kubernetes.
     *
     * @example ACK
     *
     * @var string
     */
    public $source;

    /**
     * @description The name of the Microservices Engine (MSE) namespace.
     *
     * @example true
     *
     * @var string
     */
    public $switchEnable;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'appName'        => 'AppName',
        'language'       => 'Language',
        'namespace'      => 'Namespace',
        'region'         => 'Region',
        'sentinelEnable' => 'SentinelEnable',
        'source'         => 'Source',
        'switchEnable'   => 'SwitchEnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->sentinelEnable) {
            $res['SentinelEnable'] = $this->sentinelEnable;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->switchEnable) {
            $res['SwitchEnable'] = $this->switchEnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SentinelEnable'])) {
            $model->sentinelEnable = $map['SentinelEnable'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SwitchEnable'])) {
            $model->switchEnable = $map['SwitchEnable'];
        }

        return $model;
    }
}
