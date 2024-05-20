<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class UpdateIngressRequest extends Model
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
     * @example ingress-sae-test
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example 87
     *
     * @var int
     */
    public $ingressId;

    /**
     * @example 443
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
     * @example [{"appId":"395b60e4-0550-458d-9c54-a265d036****","containerPort":8080,"domain":"www.sae.site","path":"/path1"},{"appId":"666403ce-d25b-47cf-87fe-497565d2****","containerPort":8080,"domain":"sae.site","path":"/path2"}]
     *
     * @var string
     */
    public $rules;
    protected $_name = [
        'certId'           => 'CertId',
        'certIds'          => 'CertIds',
        'defaultRule'      => 'DefaultRule',
        'description'      => 'Description',
        'ingressId'        => 'IngressId',
        'listenerPort'     => 'ListenerPort',
        'listenerProtocol' => 'ListenerProtocol',
        'loadBalanceType'  => 'LoadBalanceType',
        'rules'            => 'Rules',
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
        if (null !== $this->rules) {
            $res['Rules'] = $this->rules;
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
        if (isset($map['DefaultRule'])) {
            $model->defaultRule = $map['DefaultRule'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['Rules'])) {
            $model->rules = $map['Rules'];
        }

        return $model;
    }
}
