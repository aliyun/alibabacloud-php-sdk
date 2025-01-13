<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class CreateIngressRequest extends Model
{
    /**
     * @var string
     */
    public $addressType;

    /**
     * @description The ID of the certificate that is associated with the **CLB** instance.
     *
     *   If you set **LoadBalanceType** to **clb**, you can use CertId to configure a certificate for the HTTPS listener.
     *
     * For more information about how to manage the SSL certificate IDs that are used by CLB instances, see [Overview](https://help.aliyun.com/document_detail/90792.html).
     * @example 188077086902****_176993d****_181437****_108724****
     *
     * @var string
     */
    public $certId;

    /**
     * @description The IDs of the certificates that are associated with the **ALB** instance.
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
     * @description Default forwarding rule. Traffic is forwarded to the specified application through a designated port based on the IP address. Parameter descriptions are as follows:
     * - **appId**: Application ID. - **containerPort**: Application instance port.
     * > All requests that do not match or do not meet the **Rules** for forwarding will be directed to this specified application.
     *
     * This parameter is required.
     * @example {"appId":"395b60e4-0550-458d-9c54-a265d036****","containerPort":8080}
     *
     * @var string
     */
    public $defaultRule;

    /**
     * @description Route rule name.
     *
     * @example ingress-for-sae-test
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
     * @description The timeout period of an idle connection. Unit: seconds. Valid values: 1 to 60.
     *
     * If no request is received within the specified timeout period, ALB closes the current connection. When another request is received, ALB establishes a new connection.
     * @example 15
     *
     * @var int
     */
    public $idleTimeout;

    /**
     * @description SThe frontend port that is used by the ALB instance.
     * This parameter is required.
     * @example 80
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description Request forwarding protocol. The value description is as follows:
     * - **HTTP**: Suitable for applications that need to identify data content. - **HTTPS**: Suitable for applications that require encrypted transmission.
     * @example HTTP
     *
     * @var string
     */
    public $listenerProtocol;

    /**
     * @description The type of the SLB instance. The instance type can be specified only when you create a routing rule. You cannot change the instance type when you update the routing rule. Valid values:
     *
     *   **clb**
     *   **alb**
     *
     * @example clb
     *
     * @var string
     */
    public $loadBalanceType;

    /**
     * @var string
     */
    public $loadBalancerEdition;

    /**
     * @description The ID of the namespace where the application is located. Currently, cross-namespace applications are not supported.
     *
     * This parameter is required.
     * @example cn-beijing:sae-test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The timeout period of a request. Unit: seconds. Valid values: 1 to 180.
     * If no response is received from the backend server within the specified timeout period, ALB returns an HTTP 504 error code to the client.
     * @example 3
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
     *   **backendProtocol**: the backend service protocol. Valid values: http, https, and grpc. Default value: http.
     *   **rewritePath**: the rewrite path.
     *
     * This parameter is required.
     * @example [{"appId":"395b60e4-0550-458d-9c54-a265d036****","containerPort":8080,"domain":"www.sae.site","path":"/path1"},{"appId":"666403ce-d25b-47cf-87fe-497565d2****","containerPort":8080,"domain":"sae.site","path":"/path2"}]
     *
     * @var string
     */
    public $rules;

    /**
     * @description The security policy ID.
     *
     * @example sp-bp1bpn0kn9****
     *
     * @var string
     */
    public $securityPolicyId;

    /**
     * @description The Server Load Balancer (SLB) instance that is used by the routing rule.
     *
     * >  The SLB instance can be a Classic Load Balancer (CLB) instance or an Application Load Balancer (ALB) instance.
     * @example lb-uf6hucc7inlqrtcq5****
     *
     * @var string
     */
    public $slbId;

    /**
     * @var string
     */
    public $zoneMappings;
    protected $_name = [
        'addressType'                      => 'AddressType',
        'certId'                           => 'CertId',
        'certIds'                          => 'CertIds',
        'defaultRule'                      => 'DefaultRule',
        'description'                      => 'Description',
        'enableXForwardedFor'              => 'EnableXForwardedFor',
        'enableXForwardedForClientSrcPort' => 'EnableXForwardedForClientSrcPort',
        'enableXForwardedForProto'         => 'EnableXForwardedForProto',
        'enableXForwardedForSlbId'         => 'EnableXForwardedForSlbId',
        'enableXForwardedForSlbPort'       => 'EnableXForwardedForSlbPort',
        'idleTimeout'                      => 'IdleTimeout',
        'listenerPort'                     => 'ListenerPort',
        'listenerProtocol'                 => 'ListenerProtocol',
        'loadBalanceType'                  => 'LoadBalanceType',
        'loadBalancerEdition'              => 'LoadBalancerEdition',
        'namespaceId'                      => 'NamespaceId',
        'requestTimeout'                   => 'RequestTimeout',
        'rules'                            => 'Rules',
        'securityPolicyId'                 => 'SecurityPolicyId',
        'slbId'                            => 'SlbId',
        'zoneMappings'                     => 'ZoneMappings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->certIds) {
            $res['CertIds'] = $this->certIds;
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
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->listenerProtocol) {
            $res['ListenerProtocol'] = $this->listenerProtocol;
        }
        if (null !== $this->loadBalanceType) {
            $res['LoadBalanceType'] = $this->loadBalanceType;
        }
        if (null !== $this->loadBalancerEdition) {
            $res['LoadBalancerEdition'] = $this->loadBalancerEdition;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
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
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }
        if (null !== $this->zoneMappings) {
            $res['ZoneMappings'] = $this->zoneMappings;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIngressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['CertIds'])) {
            $model->certIds = $map['CertIds'];
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
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
        }
        if (isset($map['LoadBalanceType'])) {
            $model->loadBalanceType = $map['LoadBalanceType'];
        }
        if (isset($map['LoadBalancerEdition'])) {
            $model->loadBalancerEdition = $map['LoadBalancerEdition'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
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
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }
        if (isset($map['ZoneMappings'])) {
            $model->zoneMappings = $map['ZoneMappings'];
        }

        return $model;
    }
}
