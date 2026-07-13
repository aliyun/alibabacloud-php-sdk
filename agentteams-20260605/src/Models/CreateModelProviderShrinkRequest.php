<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models;

use AlibabaCloud\Dara\Model;

class CreateModelProviderShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $apiKeysShrink;

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
     * @var string
     */
    public $protocolsShrink;

    /**
     * @var string
     */
    public $provider;
    protected $_name = [
        'address' => 'Address',
        'apiKeysShrink' => 'ApiKeys',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'protocolsShrink' => 'Protocols',
        'provider' => 'Provider',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->apiKeysShrink) {
            $res['ApiKeys'] = $this->apiKeysShrink;
        }

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

        if (null !== $this->protocolsShrink) {
            $res['Protocols'] = $this->protocolsShrink;
        }

        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['ApiKeys'])) {
            $model->apiKeysShrink = $map['ApiKeys'];
        }

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
            $model->protocolsShrink = $map['Protocols'];
        }

        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }

        return $model;
    }
}
