<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListServiceEndpointsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListServiceEndpointsResponseBody\items\endpointConfig;

class items extends Model
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
    public $createTime;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $domainType;

    /**
     * @var endpointConfig
     */
    public $endpointConfig;

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

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'certIdentifier' => 'CertIdentifier',
        'component' => 'Component',
        'createTime' => 'CreateTime',
        'domain' => 'Domain',
        'domainType' => 'DomainType',
        'endpointConfig' => 'EndpointConfig',
        'endpointId' => 'EndpointId',
        'endpointName' => 'EndpointName',
        'instanceId' => 'InstanceId',
        'networkType' => 'NetworkType',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->endpointConfig) {
            $this->endpointConfig->validate();
        }
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

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }

        if (null !== $this->endpointConfig) {
            $res['EndpointConfig'] = null !== $this->endpointConfig ? $this->endpointConfig->toArray($noStream) : $this->endpointConfig;
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }

        if (isset($map['EndpointConfig'])) {
            $model->endpointConfig = endpointConfig::fromMap($map['EndpointConfig']);
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
