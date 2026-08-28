<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListAgentTeamsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $teamId;

    /**
     * @var string
     */
    public $teamName;

    /**
     * @var string
     */
    public $teamRole;
    protected $_name = [
        'agentId' => 'agentId',
        'teamId' => 'teamId',
        'teamName' => 'teamName',
        'teamRole' => 'teamRole',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        if (null !== $this->teamId) {
            $res['teamId'] = $this->teamId;
        }

        if (null !== $this->teamName) {
            $res['teamName'] = $this->teamName;
        }

        if (null !== $this->teamRole) {
            $res['teamRole'] = $this->teamRole;
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
        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }

        if (isset($map['teamId'])) {
            $model->teamId = $map['teamId'];
        }

        if (isset($map['teamName'])) {
            $model->teamName = $map['teamName'];
        }

        if (isset($map['teamRole'])) {
            $model->teamRole = $map['teamRole'];
        }

        return $model;
    }
}
