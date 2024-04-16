<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ListAgentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 881
     *
     * @var int
     */
    public $agentId;

    /**
     * @example 4e7400028e6f4a7393ed3acf6a7b8927_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var bool
     */
    public $defaultAgent;

    /**
     * @var mixed[]
     */
    public $instanceInfos;
    protected $_name = [
        'agentId'       => 'AgentId',
        'agentKey'      => 'AgentKey',
        'agentName'     => 'AgentName',
        'defaultAgent'  => 'DefaultAgent',
        'instanceInfos' => 'InstanceInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->defaultAgent) {
            $res['DefaultAgent'] = $this->defaultAgent;
        }
        if (null !== $this->instanceInfos) {
            $res['InstanceInfos'] = $this->instanceInfos;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
        if (isset($map['DefaultAgent'])) {
            $model->defaultAgent = $map['DefaultAgent'];
        }
        if (isset($map['InstanceInfos'])) {
            $model->instanceInfos = $map['InstanceInfos'];
        }

        return $model;
    }
}
