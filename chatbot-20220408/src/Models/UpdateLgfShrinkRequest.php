<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;

class UpdateLgfShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lgfDefinitionShrink;

    /**
     * @var int
     */
    public $lgfId;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'instanceId' => 'InstanceId',
        'lgfDefinitionShrink' => 'LgfDefinition',
        'lgfId' => 'LgfId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lgfDefinitionShrink) {
            $res['LgfDefinition'] = $this->lgfDefinitionShrink;
        }

        if (null !== $this->lgfId) {
            $res['LgfId'] = $this->lgfId;
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
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LgfDefinition'])) {
            $model->lgfDefinitionShrink = $map['LgfDefinition'];
        }

        if (isset($map['LgfId'])) {
            $model->lgfId = $map['LgfId'];
        }

        return $model;
    }
}
