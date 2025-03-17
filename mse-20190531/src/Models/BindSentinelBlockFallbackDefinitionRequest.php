<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class BindSentinelBlockFallbackDefinitionRequest extends Model
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
     * This parameter is required.
     *
     * @example spring-cloud-a
     *
     * @var string
     */
    public $appName;

    /**
     * @description Behavior ID. 0:the default behavior.
     *
     * This parameter is required.
     *
     * @example 21
     *
     * @var int
     */
    public $fallbackId;

    /**
     * @description The microservice namespace.
     *
     * This parameter is required.
     *
     * @example prod
     *
     * @var string
     */
    public $namespace;

    /**
     * @description Interface Name: The resource to which the rule applies. It must match the interface name in the console\\"s interface details.
     *
     * This parameter is required.
     *
     * @example /a
     *
     * @var string
     */
    public $resource;

    /**
     * @description Target rule type.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'appName' => 'AppName',
        'fallbackId' => 'FallbackId',
        'namespace' => 'Namespace',
        'resource' => 'Resource',
        'targetType' => 'TargetType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->fallbackId) {
            $res['FallbackId'] = $this->fallbackId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindSentinelBlockFallbackDefinitionRequest
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
        if (isset($map['FallbackId'])) {
            $model->fallbackId = $map['FallbackId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
