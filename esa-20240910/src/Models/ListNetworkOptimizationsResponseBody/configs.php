<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListNetworkOptimizationsResponseBody;

use AlibabaCloud\Tea\Model;

class configs extends Model
{
    /**
     * @description Configuration ID.
     *
     * @example 395386449776640
     *
     * @var int
     */
    public $configId;

    /**
     * @description Configuration type, which can be used to query global or rule-based configurations. The value range is as follows:
     *
     * - global: Query global configuration.
     * - rule: Query rule-based configuration.
     *
     * @example global
     *
     * @var string
     */
    public $configType;

    /**
     * @description Whether to enable GRPC, default is off. The value range is:
     * - on: enabled.
     * - off: disabled.
     *
     * @example on
     *
     * @var string
     */
    public $grpc;

    /**
     * @description Whether to enable HTTP2 origin, defaulting to off. The value range is as follows:
     *
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $http2Origin;

    /**
     * @description Rule content, using conditional expressions to match user requests. This parameter is not required when adding a global configuration. There are two usage scenarios:
     * - Match all incoming requests: Set the value to true
     * - Match specific requests: Set the value to a custom expression, e.g., (http.host eq \\"video.example.com\\")
     *
     * @example (http.host eq \\"video.example.com\\")
     *
     * @var string
     */
    public $rule;

    /**
     * @description Rule switch. This parameter is not required when adding a global configuration. The value range is as follows:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $ruleEnable;

    /**
     * @description Rule name. This parameter is not required when adding a global configuration.
     *
     * @example rule_example
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description Rule execution order. The smaller the value, the higher the priority.
     *
     * @example 1
     *
     * @var int
     */
    public $sequence;

    /**
     * @description Site configuration version number. For sites with version management enabled, this parameter can specify the site version for which the configuration takes effect, defaulting to version 0.
     *
     * @example 1
     *
     * @var int
     */
    public $siteVersion;

    /**
     * @description Whether to enable smart routing service, defaulting to off. The value range is as follows:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $smartRouting;

    /**
     * @description Maximum file size for upload, in MB. The value range is 100 to 500.
     *
     * @example 500
     *
     * @var string
     */
    public $uploadMaxFilesize;

    /**
     * @description Whether to enable Websocket, enabled by default. Value range:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $websocket;
    protected $_name = [
        'configId' => 'ConfigId',
        'configType' => 'ConfigType',
        'grpc' => 'Grpc',
        'http2Origin' => 'Http2Origin',
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'sequence' => 'Sequence',
        'siteVersion' => 'SiteVersion',
        'smartRouting' => 'SmartRouting',
        'uploadMaxFilesize' => 'UploadMaxFilesize',
        'websocket' => 'Websocket',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }
        if (null !== $this->grpc) {
            $res['Grpc'] = $this->grpc;
        }
        if (null !== $this->http2Origin) {
            $res['Http2Origin'] = $this->http2Origin;
        }
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }
        if (null !== $this->ruleEnable) {
            $res['RuleEnable'] = $this->ruleEnable;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }
        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
        }
        if (null !== $this->smartRouting) {
            $res['SmartRouting'] = $this->smartRouting;
        }
        if (null !== $this->uploadMaxFilesize) {
            $res['UploadMaxFilesize'] = $this->uploadMaxFilesize;
        }
        if (null !== $this->websocket) {
            $res['Websocket'] = $this->websocket;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }
        if (isset($map['Grpc'])) {
            $model->grpc = $map['Grpc'];
        }
        if (isset($map['Http2Origin'])) {
            $model->http2Origin = $map['Http2Origin'];
        }
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }
        if (isset($map['RuleEnable'])) {
            $model->ruleEnable = $map['RuleEnable'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }
        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }
        if (isset($map['SmartRouting'])) {
            $model->smartRouting = $map['SmartRouting'];
        }
        if (isset($map['UploadMaxFilesize'])) {
            $model->uploadMaxFilesize = $map['UploadMaxFilesize'];
        }
        if (isset($map['Websocket'])) {
            $model->websocket = $map['Websocket'];
        }

        return $model;
    }
}
