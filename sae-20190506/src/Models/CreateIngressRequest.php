<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class CreateIngressRequest extends Model
{
    /**
     * @var string
     */
    public $certId;

    /**
     * @var string
     */
    public $defaultRule;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
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
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $rules;

    /**
     * @var string
     */
    public $slbId;
    protected $_name = [
        'certId'           => 'CertId',
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
