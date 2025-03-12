<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListIngressesResponseBody\data;

use AlibabaCloud\SDK\Sae\V20190506\Models\ListIngressesResponseBody\data\ingressList\defaultRule;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListIngressesResponseBody\data\ingressList\rules;
use AlibabaCloud\Tea\Model;

class ingressList extends Model
{
    /**
     * @description The error code.
     *
     * - The **ErrorCode** parameter is not returned when the request succeeds.
     * - The **ErrorCode** parameter is returned when the request fails. For more information, see **Error codes** in this topic.
     * @example 13624*****73809_16f8e549a20_1175189789_12****3210
     *
     * @var string
     */
    public $certId;

    /**
     * @example 87***35-cn-hangzhou,812***3-cn-hangzhou
     *
     * @var string
     */
    public $certIds;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var defaultRule
     */
    public $defaultRule;

    /**
     * @description The ID of the routing rule.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the list of routing rules was obtained. Valid values:
     *
     *   **true**: indicates that the list was obtained.
     *   **false**: indicates that the list could not be obtained.
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
     * @description The type of the SLB instance based on the processing capabilities. Valid values:
     *
     *   **clb**: the Classic Load Balancer (CLB) instance.
     *   **alb**: the Application Load Balancer (ALB) instance.
     *
     * @example 80
     *
     * @var string
     */
    public $listenerPort;

    /**
     * @example HTTP
     *
     * @var string
     */
    public $listenerProtocol;

    /**
     * @example clb
     *
     * @var string
     */
    public $loadBalanceType;

    /**
     * @var string
     */
    public $mseGatewayId;

    /**
     * @var string
     */
    public $mseGatewayPort;

    /**
     * @var string
     */
    public $mseGatewayProtocol;

    /**
     * @description The HTTP status code. Valid values:
     *
     *   **2xx**: indicates that the request was successful.
     *   **3xx**: indicates that the request was redirected.
     *   **4xx**: indicates that the request was invalid.
     *   **5xx**: indicates that a server error occurred.
     *
     * @example lb-uf6jt0nu4z6ior943****-80-f5****
     *
     * @var string
     */
    public $name;

    /**
     * @description The name of the routing rule.
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
     * @description The ID of the certificate.
     *
     * @example lb-uf62****6d13tq2u5
     *
     * @var string
     */
    public $slbId;

    /**
     * @description The protocol used to forward requests. Valid values:
     *
     *   **HTTP**: used when the application needs to identify the transmitted data.
     *   **HTTPS**: used when the application requires encrypted data transmission.
     *
     * @example internet
     *
     * @var string
     */
    public $slbType;
    protected $_name = [
        'certId'             => 'CertId',
        'certIds'            => 'CertIds',
        'createTime'         => 'CreateTime',
        'defaultRule'        => 'DefaultRule',
        'description'        => 'Description',
        'id'                 => 'Id',
        'idleTimeout'        => 'IdleTimeout',
        'listenerPort'       => 'ListenerPort',
        'listenerProtocol'   => 'ListenerProtocol',
        'loadBalanceType'    => 'LoadBalanceType',
        'mseGatewayId'       => 'MseGatewayId',
        'mseGatewayPort'     => 'MseGatewayPort',
        'mseGatewayProtocol' => 'MseGatewayProtocol',
        'name'               => 'Name',
        'namespaceId'        => 'NamespaceId',
        'requestTimeout'     => 'RequestTimeout',
        'rules'              => 'Rules',
        'slbId'              => 'SlbId',
        'slbType'            => 'SlbType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->certIds) {
            $res['CertIds'] = $this->certIds;
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
                $n            = 0;
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
