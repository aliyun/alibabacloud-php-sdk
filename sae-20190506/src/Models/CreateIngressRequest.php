<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class CreateIngressRequest extends Model
{
    /**
     * @example 188077086902****_176993d****_181437****_108724****
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
     * @example {"appId":"395b60e4-0550-458d-9c54-a265d036****","containerPort":8080}
     *
     * @var string
     */
    public $defaultRule;

    /**
     * @example ingress-for-sae-test
     *
     * @var string
     */
    public $description;

    /**
     * @example 80
     *
     * @var int
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
     * @example cn-beijing:sae-test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @example [{"appId":"395b60e4-0550-458d-9c54-a265d036****","containerPort":8080,"domain":"www.sae.site","path":"/path1"},{"appId":"666403ce-d25b-47cf-87fe-497565d2****","containerPort":8080,"domain":"sae.site","path":"/path2"}]
     *
     * @var string
     */
    public $rules;

    /**
     * @example lb-uf6hucc7inlqrtcq5****
     *
     * @var string
     */
    public $slbId;
    protected $_name = [
        'certId'           => 'CertId',
        'certIds'          => 'CertIds',
        'defaultRule'      => 'DefaultRule',
        'description'      => 'Description',
        'listenerPort'     => 'ListenerPort',
        'listenerProtocol' => 'ListenerProtocol',
        'loadBalanceType'  => 'LoadBalanceType',
        'namespaceId'      => 'NamespaceId',
        'rules'            => 'Rules',
        'slbId'            => 'SlbId',
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
        if (null !== $this->defaultRule) {
            $res['DefaultRule'] = $this->defaultRule;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->rules) {
            $res['Rules'] = $this->rules;
        }
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
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
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
        }
        if (isset($map['LoadBalanceType'])) {
            $model->loadBalanceType = $map['LoadBalanceType'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['Rules'])) {
            $model->rules = $map['Rules'];
        }
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }

        return $model;
    }
}
