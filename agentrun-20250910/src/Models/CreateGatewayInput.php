<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class CreateGatewayInput extends Model
{
    /**
     * @var string
     */
    public $identityId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var GatewayNetworkConfiguration
     */
    public $networkConfiguration;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'identityId' => 'identityId',
        'name' => 'name',
        'networkConfiguration' => 'networkConfiguration',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->networkConfiguration) {
            $this->networkConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identityId) {
            $res['identityId'] = $this->identityId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->networkConfiguration) {
            $res['networkConfiguration'] = null !== $this->networkConfiguration ? $this->networkConfiguration->toArray($noStream) : $this->networkConfiguration;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['identityId'])) {
            $model->identityId = $map['identityId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['networkConfiguration'])) {
            $model->networkConfiguration = GatewayNetworkConfiguration::fromMap($map['networkConfiguration']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
