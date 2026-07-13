<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\UpdateServiceEndpointResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $certIdentifier;

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
    public $domainType;

    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var string
     */
    public $endpointName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $networkType;
    protected $_name = [
        'certIdentifier' => 'CertIdentifier',
        'component' => 'Component',
        'domain' => 'Domain',
        'domainType' => 'DomainType',
        'endpointId' => 'EndpointId',
        'endpointName' => 'EndpointName',
        'instanceId' => 'InstanceId',
        'networkType' => 'NetworkType',
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

        if (null !== $this->component) {
            $res['Component'] = $this->component;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }

        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }

        if (null !== $this->endpointName) {
            $res['EndpointName'] = $this->endpointName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
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

        if (isset($map['Component'])) {
            $model->component = $map['Component'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }

        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }

        if (isset($map['EndpointName'])) {
            $model->endpointName = $map['EndpointName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        return $model;
    }
}
