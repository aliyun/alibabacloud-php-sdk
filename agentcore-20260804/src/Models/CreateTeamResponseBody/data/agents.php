<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateTeamResponseBody\data;

use AlibabaCloud\Dara\Model;

class agents extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $teamRole;
    protected $_name = [
        'agentId' => 'agentId',
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

        if (isset($map['teamRole'])) {
            $model->teamRole = $map['teamRole'];
        }

        return $model;
    }
}
