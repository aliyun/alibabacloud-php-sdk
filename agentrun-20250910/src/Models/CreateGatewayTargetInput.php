<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class CreateGatewayTargetInput extends Model
{
    /**
     * @var string
     */
    public $domainId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var TargetConfiguration
     */
    public $targetConfiguration;
    protected $_name = [
        'domainId' => 'domainId',
        'name' => 'name',
        'targetConfiguration' => 'targetConfiguration',
    ];

    public function validate()
    {
        if (null !== $this->targetConfiguration) {
            $this->targetConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainId) {
            $res['domainId'] = $this->domainId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->targetConfiguration) {
            $res['targetConfiguration'] = null !== $this->targetConfiguration ? $this->targetConfiguration->toArray($noStream) : $this->targetConfiguration;
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
        if (isset($map['domainId'])) {
            $model->domainId = $map['domainId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['targetConfiguration'])) {
            $model->targetConfiguration = TargetConfiguration::fromMap($map['targetConfiguration']);
        }

        return $model;
    }
}
