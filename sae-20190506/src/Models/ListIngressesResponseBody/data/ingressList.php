<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListIngressesResponseBody\data;

use AlibabaCloud\SDK\Sae\V20190506\Models\ListIngressesResponseBody\data\ingressList\corsConfig;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListIngressesResponseBody\data\ingressList\defaultRule;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListIngressesResponseBody\data\ingressList\rules;
use AlibabaCloud\Tea\Model;

class ingressList extends Model
{
    /**
     * @description The ID of the certificate that is associated with a Classic Load Balancer (**CLB**) instance.
     *
     * @example 13624*****73809_16f8e549a20_1175189789_12****3210
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
     * @var int
     */
    public $createTime;

    /**
     * @var defaultRule
     */
    public $defaultRule;

    /**
     * @description The name of a routing rule.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of a routing rule.
     *
     * @example 18
     *
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $idleTimeout;

    /**
     * @description The listener ports for an SLB instance.
     *
     * @example 80
     *
     * @var string
     */
    public $listenerPort;

    /**
     * @description The protocol that is supported by SLB to forward requests. Valid values:
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
     * @description The ID of an MSE cloud-native gateway.
     *
     * @example gw-d5df01a1bae748f1a7c4e325d2fd****
     *
     * @var string
     */
    public $mseGatewayId;

    /**
     * @description The port of a service.
     *
     * @example 80
     *
     * @var string
     */
    public $mseGatewayPort;

    /**
     * @description The protocol that is supported by an MSE cloud-native gateway to forward requests. Valid values:
     *
     *   **HTTP**: HTTP is suitable for applications that need to identify transmitted data.
     *   **HTTPS**: HTTPS is suitable for applications that require encrypted data transmission.
     *
     * @example HTTP
     *
     * @var string
     */
    public $mseGatewayProtocol;

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
     * @example cn-shanghai
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @var int
     */
    public $requestTimeout;

    /**
     * @var rules[]
     */
    public $rules;

    /**
     * @description The ID of a Server Load Balancer (SLB) instance.
     *
     * @example lb-uf62****6d13tq2u5
     *
     * @var string
     */
    public $slbId;

    /**
     * @description The type of SLB instances. Valid values:
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
        'createTime' => 'CreateTime',
        'defaultRule' => 'DefaultRule',
        'description' => 'Description',
        'id' => 'Id',
        'idleTimeout' => 'IdleTimeout',
        'listenerPort' => 'ListenerPort',
        'listenerProtocol' => 'ListenerProtocol',
        'loadBalanceType' => 'LoadBalanceType',
        'mseGatewayId' => 'MseGatewayId',
        'mseGatewayPort' => 'MseGatewayPort',
        'mseGatewayProtocol' => 'MseGatewayProtocol',
        'name' => 'Name',
        'namespaceId' => 'NamespaceId',
        'requestTimeout' => 'RequestTimeout',
        'rules' => 'Rules',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->defaultRule) {
            $res['DefaultRule'] = null !== $this->defaultRule ? $this->defaultRule->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->mseGatewayId) {
            $res['MseGatewayId'] = $this->mseGatewayId;
        }
        if (null !== $this->mseGatewayPort) {
            $res['MseGatewayPort'] = $this->mseGatewayPort;
        }
        if (null !== $this->mseGatewayProtocol) {
            $res['MseGatewayProtocol'] = $this->mseGatewayProtocol;
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
     * @return ingressList
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DefaultRule'])) {
            $model->defaultRule = defaultRule::fromMap($map['DefaultRule']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['MseGatewayId'])) {
            $model->mseGatewayId = $map['MseGatewayId'];
        }
        if (isset($map['MseGatewayPort'])) {
            $model->mseGatewayPort = $map['MseGatewayPort'];
        }
        if (isset($map['MseGatewayProtocol'])) {
            $model->mseGatewayProtocol = $map['MseGatewayProtocol'];
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
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }
        if (isset($map['SlbType'])) {
            $model->slbType = $map['SlbType'];
        }

        return $model;
    }
}
