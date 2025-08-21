<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ListAgentResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var mixed[]
     */
    public $instanceInfos;
    protected $_name = [
        'agentId' => 'AgentId',
        'agentKey' => 'AgentKey',
        'agentName' => 'AgentName',
        'instanceInfos' => 'InstanceInfos',
    ];

    public function validate()
    {
        if (\is_array($this->instanceInfos)) {
            Model::validateArray($this->instanceInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->instanceInfos) {
            if (\is_array($this->instanceInfos)) {
                $res['InstanceInfos'] = [];
                foreach ($this->instanceInfos as $key1 => $value1) {
                    $res['InstanceInfos'][$key1] = $value1;
                }
            }
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['InstanceInfos'])) {
            if (!empty($map['InstanceInfos'])) {
                $model->instanceInfos = [];
                foreach ($map['InstanceInfos'] as $key1 => $value1) {
                    $model->instanceInfos[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
