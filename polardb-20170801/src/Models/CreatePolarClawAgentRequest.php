<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class CreatePolarClawAgentRequest extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $avatar;

    /**
     * @var string
     */
    public $emoji;

    /**
     * @var bool
     */
    public $restart;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'agentId' => 'AgentId',
        'applicationId' => 'ApplicationId',
        'avatar' => 'Avatar',
        'emoji' => 'Emoji',
        'restart' => 'Restart',
        'workspace' => 'Workspace',
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

        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->avatar) {
            $res['Avatar'] = $this->avatar;
        }

        if (null !== $this->emoji) {
            $res['Emoji'] = $this->emoji;
        }

        if (null !== $this->restart) {
            $res['Restart'] = $this->restart;
        }

        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
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

        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['Avatar'])) {
            $model->avatar = $map['Avatar'];
        }

        if (isset($map['Emoji'])) {
            $model->emoji = $map['Emoji'];
        }

        if (isset($map['Restart'])) {
            $model->restart = $map['Restart'];
        }

        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
