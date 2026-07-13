<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models;

use AlibabaCloud\Dara\Model;

class CreateMcpRequest extends Model
{
    /**
     * @var string[]
     */
    public $addresses;

    /**
     * @var string
     */
    public $authConfig;

    /**
     * @var bool
     */
    public $authEnabled;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $createType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $swaggerConfig;
    protected $_name = [
        'addresses' => 'Addresses',
        'authConfig' => 'AuthConfig',
        'authEnabled' => 'AuthEnabled',
        'clientToken' => 'ClientToken',
        'createType' => 'CreateType',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'protocol' => 'Protocol',
        'swaggerConfig' => 'SwaggerConfig',
    ];

    public function validate()
    {
        if (\is_array($this->addresses)) {
            Model::validateArray($this->addresses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addresses) {
            if (\is_array($this->addresses)) {
                $res['Addresses'] = [];
                $n1 = 0;
                foreach ($this->addresses as $item1) {
                    $res['Addresses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->authConfig) {
            $res['AuthConfig'] = $this->authConfig;
        }

        if (null !== $this->authEnabled) {
            $res['AuthEnabled'] = $this->authEnabled;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->createType) {
            $res['CreateType'] = $this->createType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->swaggerConfig) {
            $res['SwaggerConfig'] = $this->swaggerConfig;
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
        if (isset($map['Addresses'])) {
            if (!empty($map['Addresses'])) {
                $model->addresses = [];
                $n1 = 0;
                foreach ($map['Addresses'] as $item1) {
                    $model->addresses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AuthConfig'])) {
            $model->authConfig = $map['AuthConfig'];
        }

        if (isset($map['AuthEnabled'])) {
            $model->authEnabled = $map['AuthEnabled'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['CreateType'])) {
            $model->createType = $map['CreateType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['SwaggerConfig'])) {
            $model->swaggerConfig = $map['SwaggerConfig'];
        }

        return $model;
    }
}
