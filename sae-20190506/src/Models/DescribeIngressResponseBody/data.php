<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeIngressResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeIngressResponseBody\data\corsConfig;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeIngressResponseBody\data\defaultRule;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeIngressResponseBody\data\rules;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the certificate that is associated with a Classic Load Balancer (**CLB**) instance.
     *
     * @example 13623****809_16cad216b32_845_-419427029
     *
     * @var string
     */
    public $certId;

    /**
     * @description The ID of the certificate that is associated with an Application Load Balancer **ALB** instance.
     *
     * @example 87***35-cn-hangzhou,812***3-cn-hangzhou
     *
     * @var string
     */
    public $certIds;

    /**
     * @var corsConfig
     */
    public $corsConfig;

    /**
     * @var bool
     */
    public $createdBySae;

    /**
     * @description The default rule.
     *
     * @var defaultRule
     */
    public $defaultRule;

    /**
     * @description The name of a routing rule.
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
     * @description The ID of a routing rule.
     *
     * @example 87
     *
     * @var int
     */
    public $id;

    /**
     * @example 3
     *
     * @var int
     */
    public $idleTimeout;

    /**
     * @description The listener ports for an SLB instance.
     *
     * @example 443
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The protocol used to forward requests. Valid values:
     *
     *   **HTTP**: HTTP is suitable for applications that need to identify the transmitted data.
     *   **HTTPS**: HTTPS is suitable for applications that require encrypted data transmission.
     *
     * This parameter is optional in the **CreateIngress** and **UpadateIngress** operations. If you do not configure this parameter when you call the CreateIngress or UpdateIngress operation to create or update a gateway routing rule, this parameter is not returned for the corresponding response.
     *
     * @example HTTP
     *
     * @var string
     */
    public $listenerProtocol;

    /**
     * @description The type of SLB instances. Valid values:
     *
     *   **clb**: Classic Load Balancer (formerly known as SLB).
     *   **alb**: Application Load Balancer.
     *
     * @example clb
     *
     * @var string
     */
    public $loadBalanceType;

    /**
     * @description The name of a routing rule.
     *
     * @example lb-uf6jt0nu4z6ior943****-80-f5****
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of a namespace.
     *
     * @example cn-beijing:sae-test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @example 60
     *
     * @var int
     */
    public $requestTimeout;

    /**
     * @description The forwarding rules.
     *
     * @var rules[]
     */
    public $rules;

    /**
     * @example sp-n0kn923****
     *
     * @var string
     */
    public $securityPolicyId;

    /**
     * @description The ID of a Server Load Balancer (SLB) instance.
     *
     * @example lb-uf62****6d13tq2u5
     *
     * @var string
     */
    public $slbId;

    /**
     * @description The type of an SLB instance. Valid values:
     *
     *   **internet**: an Internet-facing SLB instance
     *   **intranet**: an Intranet-facing SLB instance
     *
     * @example internet
     *
     * @var string
     */
    public $slbType;
    protected $_name = [
        'certId' => 'CertId',
        'certIds' => 'CertIds',
        'corsConfig' => 'CorsConfig',
        'createdBySae' => 'CreatedBySae',
        'defaultRule' => 'DefaultRule',
        'description' => 'Description',
        'enableXForwardedFor' => 'EnableXForwardedFor',
        'enableXForwardedForClientSrcPort' => 'EnableXForwardedForClientSrcPort',
        'enableXForwardedForProto' => 'EnableXForwardedForProto',
        'enableXForwardedForSlbId' => 'EnableXForwardedForSlbId',
        'enableXForwardedForSlbPort' => 'EnableXForwardedForSlbPort',
        'id' => 'Id',
        'idleTimeout' => 'IdleTimeout',
        'listenerPort' => 'ListenerPort',
        'listenerProtocol' => 'ListenerProtocol',
        'loadBalanceType' => 'LoadBalanceType',
        'name' => 'Name',
        'namespaceId' => 'NamespaceId',
        'requestTimeout' => 'RequestTimeout',
        'rules' => 'Rules',
        'securityPolicyId' => 'SecurityPolicyId',
        'slbId' => 'SlbId',
        'slbType' => 'SlbType',
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
            $res['CorsConfig'] = null !== $this->corsConfig ? $this->corsConfig->toMap() : null;
        }
        if (null !== $this->createdBySae) {
            $res['CreatedBySae'] = $this->createdBySae;
        }
        if (null !== $this->defaultRule) {
            $res['DefaultRule'] = null !== $this->defaultRule ? $this->defaultRule->toMap() : null;
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->requestTimeout) {
            $res['RequestTimeout'] = $this->requestTimeout;
        }
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }
        if (null !== $this->slbType) {
            $res['SlbType'] = $this->slbType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
            $model->corsConfig = corsConfig::fromMap($map['CorsConfig']);
        }
        if (isset($map['CreatedBySae'])) {
            $model->createdBySae = $map['CreatedBySae'];
        }
        if (isset($map['DefaultRule'])) {
            $model->defaultRule = defaultRule::fromMap($map['DefaultRule']);
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['RequestTimeout'])) {
            $model->requestTimeout = $map['RequestTimeout'];
        }
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
        }
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }
        if (isset($map['SlbType'])) {
            $model->slbType = $map['SlbType'];
        }

        return $model;
    }
}
