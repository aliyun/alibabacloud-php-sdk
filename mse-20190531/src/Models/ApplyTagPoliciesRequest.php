<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class ApplyTagPoliciesRequest extends Model
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
     * @description The ID of the application.
     *
     * @example h5pohqu3gd@xxx
     *
     * @deprecated
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
     * @description Specifies whether to enable the routing rule.
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description Optional. The ID of the namespace.
     *
     * @example 12233****
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The details of the routing rule.
     *
     * @example { "blue": { # Tag key. "rate": 20, # Rate. A value of 20 indicates that 20% of the traffic is routed to the node identified by the tag. "name": "luoye-route-test", # Routing rule name. "carryData": false, # Specifies whether to enable pass-through. This parameter is applicable to end-to-end canary release. "rules": { # Rule information. "dubbo": \[{ # Dubbo rule. The system also supports Spring Cloud and Istio rule. "serviceName": "com.taobao.hsf.common.DemoService", # Service name (operation name). "group": "", # Group name. "version": "", # Service version. "methodName": "sayHello", # Method name. "condition": "AND", # Logical operator used by the following items. Valid values: AND and OR. "argumentItems": \[{ # Array of rule details. "index": 0, # Index field. "expr": "", # Expression. Its details is described below. "operator": "rawvalue", # The comparison mode. A value of rawvalue indicates direct comparison. A value of mode indicates the modulo operation. A value of list indicates using a whitelist. "value": "jim", # Base value. The value obtained by the expression will be compared with this value. If operator is set to list, separate the items specified for this parameter with commas (,). Example: 1,2,3. "cond": "==" # Comparison operator. Valid values: >=, <=, >, <, and ==. }] }] } }, "\_base": { # Another tag key. "rate": 80 # Rate. A value of 20 indicates that 20% of the traffic is routed to the node identified by the tag. } }
     *
     * @var string
     */
    public $rules;

    /**
     * @description The service source.
     *
     * @example edasmsc
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'appId'          => 'AppId',
        'appName'        => 'AppName',
        'enable'         => 'Enable',
        'namespace'      => 'Namespace',
        'namespaceId'    => 'NamespaceId',
        'region'         => 'Region',
        'rules'          => 'Rules',
        'source'         => 'Source',
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
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->rules) {
            $res['Rules'] = $this->rules;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyTagPoliciesRequest
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
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Rules'])) {
            $model->rules = $map['Rules'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
