<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class UpdateIngressRequest extends Model
{
    /**
     * @var string
     */
    public $certId;

    /**
     * @var string
     */
    public $certIds;

    /**
     * @var string
     */
    public $corsConfig;

    /**
     * @var string
     */
    public $defaultRule;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableXForwardedFor;

    /**
     * @var bool
     */
    public $enableXForwardedForClientSrcPort;

    /**
     * @var bool
     */
    public $enableXForwardedForProto;

    /**
     * @var bool
     */
    public $enableXForwardedForSlbId;

    /**
     * @var bool
     */
    public $enableXForwardedForSlbPort;

    /**
     * @var int
     */
    public $idleTimeout;

    /**
     * @var int
     */
    public $ingressId;

    /**
     * @var string
     */
    public $listenerPort;

    /**
     * @var string
     */
    public $listenerProtocol;

    /**
     * @var string
     */
    public $loadBalanceType;

    /**
     * @var int
     */
    public $requestTimeout;

    /**
     * @var string
     */
    public $rules;

    /**
     * @var string
     */
    public $securityPolicyId;
    protected $_name = [
        'certId' => 'CertId',
        'certIds' => 'CertIds',
        'corsConfig' => 'CorsConfig',
        'defaultRule' => 'DefaultRule',
        'description' => 'Description',
        'enableXForwardedFor' => 'EnableXForwardedFor',
        'enableXForwardedForClientSrcPort' => 'EnableXForwardedForClientSrcPort',
        'enableXForwardedForProto' => 'EnableXForwardedForProto',
        'enableXForwardedForSlbId' => 'EnableXForwardedForSlbId',
        'enableXForwardedForSlbPort' => 'EnableXForwardedForSlbPort',
        'idleTimeout' => 'IdleTimeout',
        'ingressId' => 'IngressId',
        'listenerPort' => 'ListenerPort',
        'listenerProtocol' => 'ListenerProtocol',
        'loadBalanceType' => 'LoadBalanceType',
        'requestTimeout' => 'RequestTimeout',
        'rules' => 'Rules',
        'securityPolicyId' => 'SecurityPolicyId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }

        if (null !== $this->certIds) {
            $res['CertIds'] = $this->certIds;
        }

        if (null !== $this->corsConfig) {
            $res['CorsConfig'] = $this->corsConfig;
        }

        if (null !== $this->defaultRule) {
            $res['DefaultRule'] = $this->defaultRule;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enableXForwardedFor) {
            $res['EnableXForwardedFor'] = $this->enableXForwardedFor;
        }

        if (null !== $this->enableXForwardedForClientSrcPort) {
            $res['EnableXForwardedForClientSrcPort'] = $this->enableXForwardedForClientSrcPort;
        }

        if (null !== $this->enableXForwardedForProto) {
            $res['EnableXForwardedForProto'] = $this->enableXForwardedForProto;
        }

        if (null !== $this->enableXForwardedForSlbId) {
            $res['EnableXForwardedForSlbId'] = $this->enableXForwardedForSlbId;
        }

        if (null !== $this->enableXForwardedForSlbPort) {
            $res['EnableXForwardedForSlbPort'] = $this->enableXForwardedForSlbPort;
        }

        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
        }

        if (null !== $this->ingressId) {
            $res['IngressId'] = $this->ingressId;
        }

        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }

        if (null !== $this->listenerProtocol) {
            $res['ListenerProtocol'] = $this->listenerProtocol;
        }

        if (null !== $this->loadBalanceType) {
            $res['LoadBalanceType'] = $this->loadBalanceType;
        }

        if (null !== $this->requestTimeout) {
            $res['RequestTimeout'] = $this->requestTimeout;
        }

        if (null !== $this->rules) {
            $res['Rules'] = $this->rules;
        }

        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }

        if (isset($map['CertIds'])) {
            $model->certIds = $map['CertIds'];
        }

        if (isset($map['CorsConfig'])) {
            $model->corsConfig = $map['CorsConfig'];
        }

        if (isset($map['DefaultRule'])) {
            $model->defaultRule = $map['DefaultRule'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnableXForwardedFor'])) {
            $model->enableXForwardedFor = $map['EnableXForwardedFor'];
        }

        if (isset($map['EnableXForwardedForClientSrcPort'])) {
            $model->enableXForwardedForClientSrcPort = $map['EnableXForwardedForClientSrcPort'];
        }

        if (isset($map['EnableXForwardedForProto'])) {
            $model->enableXForwardedForProto = $map['EnableXForwardedForProto'];
        }

        if (isset($map['EnableXForwardedForSlbId'])) {
            $model->enableXForwardedForSlbId = $map['EnableXForwardedForSlbId'];
        }

        if (isset($map['EnableXForwardedForSlbPort'])) {
            $model->enableXForwardedForSlbPort = $map['EnableXForwardedForSlbPort'];
        }

        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
        }

        if (isset($map['IngressId'])) {
            $model->ingressId = $map['IngressId'];
        }

        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }

        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
        }

        if (isset($map['LoadBalanceType'])) {
            $model->loadBalanceType = $map['LoadBalanceType'];
        }

        if (isset($map['RequestTimeout'])) {
            $model->requestTimeout = $map['RequestTimeout'];
        }

        if (isset($map['Rules'])) {
            $model->rules = $map['Rules'];
        }

        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
        }

        return $model;
    }
}
