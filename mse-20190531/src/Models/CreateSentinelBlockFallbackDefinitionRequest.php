<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class CreateSentinelBlockFallbackDefinitionRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @example abcde@12345
     *
     * @var string
     */
    public $appId;

    /**
     * @example example-app
     *
     * @var string
     */
    public $appName;

    /**
     * @example {"webFallbackMode":0,"webRespMessage":"{}","webRespStatusCode":429,"webRespContentType":0}
     *
     * @var string
     */
    public $fallbackBehavior;

    /**
     * @example JAVA
     *
     * @var string
     */
    public $language;

    /**
     * @example MyFallback
     *
     * @var string
     */
    public $name;

    /**
     * @example test
     *
     * @var string
     */
    public $namespace;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 1 Web
     * 2 Rpc
     *
     * @var int
     */
    public $resourceClassification;

    /**
     * @example default
     *
     * @var string
     */
    public $scenario;

    /**
     * @example edasmsc
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'appId' => 'AppId',
        'appName' => 'AppName',
        'fallbackBehavior' => 'FallbackBehavior',
        'language' => 'Language',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'regionId' => 'RegionId',
        'resourceClassification' => 'ResourceClassification',
        'scenario' => 'Scenario',
        'source' => 'Source',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->fallbackBehavior) {
            $res['FallbackBehavior'] = $this->fallbackBehavior;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceClassification) {
            $res['ResourceClassification'] = $this->resourceClassification;
        }
        if (null !== $this->scenario) {
            $res['Scenario'] = $this->scenario;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSentinelBlockFallbackDefinitionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['FallbackBehavior'])) {
            $model->fallbackBehavior = $map['FallbackBehavior'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceClassification'])) {
            $model->resourceClassification = $map['ResourceClassification'];
        }
        if (isset($map['Scenario'])) {
            $model->scenario = $map['Scenario'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
