<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class CreateMobileAgentTaskRequest extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $inputParam;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nodeIds;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'agentId' => 'AgentId',
        'inputParam' => 'InputParam',
        'name' => 'Name',
        'nodeIds' => 'NodeIds',
        'sessionId' => 'SessionId',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->inputParam) {
            $res['InputParam'] = $this->inputParam;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['InputParam'])) {
            $model->inputParam = $map['InputParam'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NodeIds'])) {
            $model->nodeIds = $map['NodeIds'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
