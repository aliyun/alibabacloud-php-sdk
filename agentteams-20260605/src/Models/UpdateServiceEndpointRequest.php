<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models;

use AlibabaCloud\Dara\Model;

class UpdateServiceEndpointRequest extends Model
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
    public $domain;

    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'certIdentifier' => 'CertIdentifier',
        'clientToken' => 'ClientToken',
        'domain' => 'Domain',
        'endpointId' => 'EndpointId',
        'instanceId' => 'InstanceId',
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

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
