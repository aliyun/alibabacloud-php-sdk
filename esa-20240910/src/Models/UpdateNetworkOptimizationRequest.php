<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateNetworkOptimizationRequest extends Model
{
    /**
     * @description Configuration ID.
     *
     * This parameter is required.
     *
     * @example 352816096987136
     *
     * @var int
     */
    public $configId;

    /**
     * @description Whether to enable GRPC, default is disabled. Possible values:
     * - on: Enable
     * - off: Disable
     *
     * @example on
     *
     * @var string
     */
    public $grpc;

    /**
     * @description Whether to enable HTTP2 origin, default is disabled. Possible values:
     * - on: Enable
     * - off: Disable
     *
     * @example on
     *
     * @var string
     */
    public $http2Origin;

    /**
     * @description Rule content, using conditional expressions to match user requests. This parameter is not required when adding a global configuration. There are two usage scenarios:
     * - Match all incoming requests: Set the value to true
     * - Match specific requests: Set the value to a custom expression, for example: (http.host eq \\"video.example.com\\")
     *
     * @example (http.host eq \\"video.example.com\\")
     *
     * @var string
     */
    public $rule;

    /**
     * @description Rule switch. This parameter is not required when adding a global configuration. Possible values:
     * - on: Enable.
     * - off: Disable.
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
     * @description Site ID, which can be obtained by calling the [ListSites](~~ListSites~~) API.
     *
     * This parameter is required.
     *
     * @example 123456****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description Whether to enable the smart routing service, default is disabled. Possible values:
     * - on: Enable
     * - off: Disable
     *
     * @example on
     *
     * @var string
     */
    public $smartRouting;

    /**
     * @description Maximum upload file size, in MB, with a range of 100 to 500.
     *
     * @example 100
     *
     * @var string
     */
    public $uploadMaxFilesize;

    /**
     * @description Whether to enable Websocket, default is enabled. Possible values:
     * - on: Enable
     * - off: Disable
     *
     * @example on
     *
     * @var string
     */
    public $websocket;
    protected $_name = [
        'configId' => 'ConfigId',
        'grpc' => 'Grpc',
        'http2Origin' => 'Http2Origin',
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'siteId' => 'SiteId',
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
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
     * @return UpdateNetworkOptimizationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
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
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
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
