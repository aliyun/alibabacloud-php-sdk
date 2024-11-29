<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs;

use AlibabaCloud\Tea\Model;

class networkOptimization extends Model
{
    /**
     * @example 390286182395904
     *
     * @var int
     */
    public $configId;

    /**
     * @example on
     *
     * @var string
     */
    public $grpc;

    /**
     * @example on
     *
     * @var string
     */
    public $http2Origin;

    /**
     * @example (http.host eq \\"video.example.com\\")
     *
     * @var string
     */
    public $rule;

    /**
     * @example on
     *
     * @var string
     */
    public $ruleEnable;

    /**
     * @example rule_example
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example 1
     *
     * @var string
     */
    public $sequence;

    /**
     * @example on
     *
     * @var string
     */
    public $smartRouting;

    /**
     * @example 300
     *
     * @var string
     */
    public $uploadMaxFilesize;

    /**
     * @example on
     *
     * @var string
     */
    public $websocket;
    protected $_name = [
        'configId'          => 'ConfigId',
        'grpc'              => 'Grpc',
        'http2Origin'       => 'Http2Origin',
        'rule'              => 'Rule',
        'ruleEnable'        => 'RuleEnable',
        'ruleName'          => 'RuleName',
        'sequence'          => 'Sequence',
        'smartRouting'      => 'SmartRouting',
        'uploadMaxFilesize' => 'UploadMaxFilesize',
        'websocket'         => 'Websocket',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
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
     * @return networkOptimization
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
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
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
