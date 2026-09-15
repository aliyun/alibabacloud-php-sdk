<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class CreateAgentRequest extends Model
{
    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $agentType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $expireAfterSeconds;
    protected $_name = [
        'agentName' => 'AgentName',
        'agentType' => 'AgentType',
        'description' => 'Description',
        'expireAfterSeconds' => 'ExpireAfterSeconds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->agentType) {
            $res['AgentType'] = $this->agentType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->expireAfterSeconds) {
            $res['ExpireAfterSeconds'] = $this->expireAfterSeconds;
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
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['AgentType'])) {
            $model->agentType = $map['AgentType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ExpireAfterSeconds'])) {
            $model->expireAfterSeconds = $map['ExpireAfterSeconds'];
        }

        return $model;
    }
}
