<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateLgfRequest\lgfDefinition;

class UpdateLgfRequest extends Model
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
     * @var lgfDefinition
     */
    public $lgfDefinition;

    /**
     * @var int
     */
    public $lgfId;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'instanceId' => 'InstanceId',
        'lgfDefinition' => 'LgfDefinition',
        'lgfId' => 'LgfId',
    ];

    public function validate()
    {
        if (null !== $this->lgfDefinition) {
            $this->lgfDefinition->validate();
        }
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

        if (null !== $this->lgfDefinition) {
            $res['LgfDefinition'] = null !== $this->lgfDefinition ? $this->lgfDefinition->toArray($noStream) : $this->lgfDefinition;
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
            $model->lgfDefinition = lgfDefinition::fromMap($map['LgfDefinition']);
        }

        if (isset($map['LgfId'])) {
            $model->lgfId = $map['LgfId'];
        }

        return $model;
    }
}
