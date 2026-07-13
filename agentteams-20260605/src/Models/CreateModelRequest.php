<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models;

use AlibabaCloud\Dara\Model;

class CreateModelRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

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
     * @var string[]
     */
    public $protocols;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $providerId;

    /**
     * @var string
     */
    public $providerName;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'protocols' => 'Protocols',
        'provider' => 'Provider',
        'providerId' => 'ProviderId',
        'providerName' => 'ProviderName',
    ];

    public function validate()
    {
        if (\is_array($this->protocols)) {
            Model::validateArray($this->protocols);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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

        if (null !== $this->protocols) {
            if (\is_array($this->protocols)) {
                $res['Protocols'] = [];
                $n1 = 0;
                foreach ($this->protocols as $item1) {
                    $res['Protocols'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }

        if (null !== $this->providerId) {
            $res['ProviderId'] = $this->providerId;
        }

        if (null !== $this->providerName) {
            $res['ProviderName'] = $this->providerName;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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

        if (isset($map['Protocols'])) {
            if (!empty($map['Protocols'])) {
                $model->protocols = [];
                $n1 = 0;
                foreach ($map['Protocols'] as $item1) {
                    $model->protocols[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }

        if (isset($map['ProviderId'])) {
            $model->providerId = $map['ProviderId'];
        }

        if (isset($map['ProviderName'])) {
            $model->providerName = $map['ProviderName'];
        }

        return $model;
    }
}
