<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class CreateNacosMcpServerRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $endpointSpecification;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $serverName;

    /**
     * @var string
     */
    public $serverSpecification;

    /**
     * @var string
     */
    public $toolSpecification;

    /**
     * @var string
     */
    public $yamlConfig;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'endpointSpecification' => 'EndpointSpecification',
        'instanceId' => 'InstanceId',
        'namespaceId' => 'NamespaceId',
        'serverName' => 'ServerName',
        'serverSpecification' => 'ServerSpecification',
        'toolSpecification' => 'ToolSpecification',
        'yamlConfig' => 'YamlConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->endpointSpecification) {
            $res['EndpointSpecification'] = $this->endpointSpecification;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->serverName) {
            $res['ServerName'] = $this->serverName;
        }

        if (null !== $this->serverSpecification) {
            $res['ServerSpecification'] = $this->serverSpecification;
        }

        if (null !== $this->toolSpecification) {
            $res['ToolSpecification'] = $this->toolSpecification;
        }

        if (null !== $this->yamlConfig) {
            $res['YamlConfig'] = $this->yamlConfig;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['EndpointSpecification'])) {
            $model->endpointSpecification = $map['EndpointSpecification'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['ServerName'])) {
            $model->serverName = $map['ServerName'];
        }

        if (isset($map['ServerSpecification'])) {
            $model->serverSpecification = $map['ServerSpecification'];
        }

        if (isset($map['ToolSpecification'])) {
            $model->toolSpecification = $map['ToolSpecification'];
        }

        if (isset($map['YamlConfig'])) {
            $model->yamlConfig = $map['YamlConfig'];
        }

        return $model;
    }
}
