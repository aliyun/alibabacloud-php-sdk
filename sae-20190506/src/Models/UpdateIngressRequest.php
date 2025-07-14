<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class UpdateIngressRequest extends Model
{
    /**
     * @description The ID of the certificate that is associated with the Classic Load Balancer (**CLB**) instance.
     *
     *   If you set **LoadBalanceType** to **clb**, you can use CertId to configure a certificate for the HTTPS listener.
     *
     * For more information about how to manage the SSL certificate IDs that are used by CLB instances, see [Overview](https://help.aliyun.com/document_detail/90792.html).
     *
     * @example 188077086902****_176993d****_181437****_108724****
     *
     * @var string
     */
    public $certId;

    /**
     * @description The IDs of the certificates that are associated with the Application Load Balancer (**ALB**) instance.
     *
     *   If you set **LoadBalanceType** to **alb**, you can use CertIds to configure multiple certificates for the HTTPS listener. Separate multiple certificate IDs with commas (,).
     *   The ID of the SSL certificate that is used by an ALB instance can be obtained from Certificate Management Service. For example, if you specify `756***-cn-hangzhou`, `756***` is the certificate ID that is obtained from the service page, and `-cn-hangzhou` is the fixed suffix. For more information, see [Manage certificates](https://help.aliyun.com/document_detail/209076.html).
     *
     * @example 87***35-cn-hangzhou,812***3-cn-hangzhou
     *
     * @var string
     */
    public $certIds;

    /**
     * @var string
     */
    public $corsConfig;

    /**
     * @description The default forwarding rule. You can specify a port and an application in the default forwarding rule to forward traffic based on the IP address. The following list describes the involved parameters:
     *
     *   **appId**: the ID of the application.
     *   **containerPort**: the container port of the application.
     *
     * >  All requests that do not match the forwarding rules specified for Rules are forwarded over the port to the application.
     *
     * @example {"appId":"395b60e4-0550-458d-9c54-a265d036****","containerPort":8080}
     *
     * @var string
     */
    public $defaultRule;

    /**
     * @description The name of the routing rule.
     *
     * @example ingress-sae-test
     *
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
     * @description The timeout period of idle connections. Unit: seconds.
     *
     * >  A value of 0 indicates that the default value is used.
     *
     * @example 15
     *
     * @var int
     */
    public $idleTimeout;

    /**
     * @description The ID of the routing rule.
     *
     * This parameter is required.
     *
     * @example 87
     *
     * @var int
     */
    public $ingressId;

    /**
     * @description The port specified for the Server Load Balancer (SLB) listener. You must specify a vacant port.
     *
     * @example 443
     *
     * @var string
     */
    public $listenerPort;

    /**
     * @description The protocol that is used to forward requests. Valid values:
     *
     *   **HTTP**: HTTP is suitable for applications that need to identify the transmitted data.
     *   **HTTPS**: HTTPS is suitable for applications that require encrypted data transmission.
     *
     * @example HTTP
     *
     * @var string
     */
    public $listenerProtocol;

    /**
     * @description This parameter is discontinued.
     *
     * @example clb
     *
     * @var string
     */
    public $loadBalanceType;

    /**
     * @description The request timed out. Unit: seconds.
     *
     * @example 60
     *
     * @var int
     */
    public $requestTimeout;

    /**
     * @description The forwarding rules. You can specify a port and an application in a forwarding rule to forward traffic based on the specified domain name and request path. The following list describes the involved parameters:
     *
     *   **appId**: the ID of the application.
     *   **containerPort**: the container port of the application.
     *   **domain**: the domain name.
     *   **path**: the request path.
     *
     * @example [{"appId":"395b60e4-0550-458d-9c54-a265d036****","containerPort":8080,"domain":"www.sae.site","path":"/path1"},{"appId":"666403ce-d25b-47cf-87fe-497565d2****","containerPort":8080,"domain":"sae.site","path":"/path2"}]
     *
     * @var string
     */
    public $rules;

    /**
     * @description The ID of a security policy.
     *
     * @example tls_cipher_policy_1_2_strict_with_1_3
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateIngressRequest
     */
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
