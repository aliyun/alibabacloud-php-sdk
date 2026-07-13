<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models;

use AlibabaCloud\Dara\Model;

class CreateServiceEndpointRequest extends Model
{
    /**
     * @var string
     */
    public $certIdentifier;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $component;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $resourceName;
    protected $_name = [
        'certIdentifier' => 'CertIdentifier',
        'clientToken' => 'ClientToken',
        'component' => 'Component',
        'domain' => 'Domain',
        'instanceId' => 'InstanceId',
        'resourceName' => 'ResourceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->component) {
            $res['Component'] = $this->component;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
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
        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Component'])) {
            $model->component = $map['Component'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        return $model;
    }
}
