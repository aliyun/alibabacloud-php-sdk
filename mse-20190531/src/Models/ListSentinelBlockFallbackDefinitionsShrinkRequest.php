<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class ListSentinelBlockFallbackDefinitionsShrinkRequest extends Model
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
     * @description Behavior Classification Set.
     *
     * @var string
     */
    public $classificationSetShrink;

    /**
     * @description The name of the Microservices namespace.
     *
     * This parameter is required.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'appName' => 'AppName',
        'classificationSetShrink' => 'ClassificationSet',
        'namespace' => 'Namespace',
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
        if (null !== $this->classificationSetShrink) {
            $res['ClassificationSet'] = $this->classificationSetShrink;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSentinelBlockFallbackDefinitionsShrinkRequest
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
        if (isset($map['ClassificationSet'])) {
            $model->classificationSetShrink = $map['ClassificationSet'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
