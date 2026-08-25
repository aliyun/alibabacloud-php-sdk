<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ResetUserPasswordResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $agentCoreUserId;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'agentCoreUserId' => 'agentCoreUserId',
        'password' => 'password',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentCoreUserId) {
            $res['agentCoreUserId'] = $this->agentCoreUserId;
        }

        if (null !== $this->password) {
            $res['password'] = $this->password;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['agentCoreUserId'])) {
            $model->agentCoreUserId = $map['agentCoreUserId'];
        }

        if (isset($map['password'])) {
            $model->password = $map['password'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
