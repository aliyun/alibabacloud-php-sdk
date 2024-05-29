<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateAuthPolicyRequest extends Model
{
    /**
     * @description The language of the response. Valid values: zh-CN and en-US. Default value: zh-CN. The value zh-CN indicates Chinese, and the value en-US indicates English.
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The application ID.
     *
     * @example abcde@12345
     *
     * @var string
     */
    public $appId;

    /**
     * @description The content of the service authentication rule.
     *
     * @example [{\\"all\\":true,\\"appIds\\":[\\"f6xqzbao96@4adfaf3c92c947a\\"],\\"black\\":false}]
     *
     * @var string
     */
    public $authRule;

    /**
     * @description Specifies whether to enable the rule.
     *
     * @example true
     *
     * @var string
     */
    public $enable;

    /**
     * @description The rule ID.
     *
     * This parameter is required.
     * @example 432
     *
     * @var string
     */
    public $id;

    /**
     * @description The ID of the ACK cluster namespace.
     *
     * @example c19c6c500e1ff4d7abc7bed9b8236***
     *
     * @var string
     */
    public $k8sNamespace;

    /**
     * @description The name of the rule.
     *
     * @example demo-test
     *
     * @var string
     */
    public $name;

    /**
     * @description The protocol type. Valid values:
     *
     *   **SPRING_CLOUD**
     *   **DUBBO**
     *   **istio**
     *
     * @example SPRING_CLOUD
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The source for application access.
     *
     * @example edasmsc
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'appId'          => 'AppId',
        'authRule'       => 'AuthRule',
        'enable'         => 'Enable',
        'id'             => 'Id',
        'k8sNamespace'   => 'K8sNamespace',
        'name'           => 'Name',
        'protocol'       => 'Protocol',
        'region'         => 'Region',
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
        if (null !== $this->authRule) {
            $res['AuthRule'] = $this->authRule;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->k8sNamespace) {
            $res['K8sNamespace'] = $this->k8sNamespace;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAuthPolicyRequest
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
        if (isset($map['AuthRule'])) {
            $model->authRule = $map['AuthRule'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['K8sNamespace'])) {
            $model->k8sNamespace = $map['K8sNamespace'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
