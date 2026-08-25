<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateTeamRequest\body;

use AlibabaCloud\Dara\Model;

class users extends Model
{
    /**
     * @var string
     */
    public $teamRole;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'teamRole' => 'teamRole',
        'userId' => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->teamRole) {
            $res['teamRole'] = $this->teamRole;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['teamRole'])) {
            $model->teamRole = $map['teamRole'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
