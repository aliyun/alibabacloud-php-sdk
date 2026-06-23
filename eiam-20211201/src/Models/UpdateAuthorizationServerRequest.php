<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class UpdateAuthorizationServerRequest extends Model
{
    /**
     * @var string
     */
    public $authorizationServerId;

    /**
     * @var string
     */
    public $authorizationServerName;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $issuerDomain;

    /**
     * @var string
     */
    public $issuerMode;
    protected $_name = [
        'authorizationServerId' => 'AuthorizationServerId',
        'authorizationServerName' => 'AuthorizationServerName',
        'clientToken' => 'ClientToken',
        'instanceId' => 'InstanceId',
        'issuerDomain' => 'IssuerDomain',
        'issuerMode' => 'IssuerMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationServerId) {
            $res['AuthorizationServerId'] = $this->authorizationServerId;
        }

        if (null !== $this->authorizationServerName) {
            $res['AuthorizationServerName'] = $this->authorizationServerName;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->issuerDomain) {
            $res['IssuerDomain'] = $this->issuerDomain;
        }

        if (null !== $this->issuerMode) {
            $res['IssuerMode'] = $this->issuerMode;
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
        if (isset($map['AuthorizationServerId'])) {
            $model->authorizationServerId = $map['AuthorizationServerId'];
        }

        if (isset($map['AuthorizationServerName'])) {
            $model->authorizationServerName = $map['AuthorizationServerName'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IssuerDomain'])) {
            $model->issuerDomain = $map['IssuerDomain'];
        }

        if (isset($map['IssuerMode'])) {
            $model->issuerMode = $map['IssuerMode'];
        }

        return $model;
    }
}
