<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\DescribeDataAgentSessionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dms\V20250414\Models\DescribeDataAgentSessionResponseBody\data\chatHistoryLocations;
use AlibabaCloud\SDK\Dms\V20250414\Models\DescribeDataAgentSessionResponseBody\data\sessionConfig;

class data extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentStatus;

    /**
     * @var chatHistoryLocations[]
     */
    public $chatHistoryLocations;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $favoriteInWorkspace;

    /**
     * @var string
     */
    public $file;

    /**
     * @var bool
     */
    public $saved;

    /**
     * @var sessionConfig
     */
    public $sessionConfig;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $sessionStatus;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'agentId' => 'AgentId',
        'agentStatus' => 'AgentStatus',
        'chatHistoryLocations' => 'ChatHistoryLocations',
        'createTime' => 'CreateTime',
        'favoriteInWorkspace' => 'FavoriteInWorkspace',
        'file' => 'File',
        'saved' => 'Saved',
        'sessionConfig' => 'SessionConfig',
        'sessionId' => 'SessionId',
        'sessionStatus' => 'SessionStatus',
        'title' => 'Title',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->chatHistoryLocations)) {
            Model::validateArray($this->chatHistoryLocations);
        }
        if (null !== $this->sessionConfig) {
            $this->sessionConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentStatus) {
            $res['AgentStatus'] = $this->agentStatus;
        }

        if (null !== $this->chatHistoryLocations) {
            if (\is_array($this->chatHistoryLocations)) {
                $res['ChatHistoryLocations'] = [];
                $n1 = 0;
                foreach ($this->chatHistoryLocations as $item1) {
                    $res['ChatHistoryLocations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->favoriteInWorkspace) {
            $res['FavoriteInWorkspace'] = $this->favoriteInWorkspace;
        }

        if (null !== $this->file) {
            $res['File'] = $this->file;
        }

        if (null !== $this->saved) {
            $res['Saved'] = $this->saved;
        }

        if (null !== $this->sessionConfig) {
            $res['SessionConfig'] = null !== $this->sessionConfig ? $this->sessionConfig->toArray($noStream) : $this->sessionConfig;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->sessionStatus) {
            $res['SessionStatus'] = $this->sessionStatus;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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

        if (isset($map['AgentStatus'])) {
            $model->agentStatus = $map['AgentStatus'];
        }

        if (isset($map['ChatHistoryLocations'])) {
            if (!empty($map['ChatHistoryLocations'])) {
                $model->chatHistoryLocations = [];
                $n1 = 0;
                foreach ($map['ChatHistoryLocations'] as $item1) {
                    $model->chatHistoryLocations[$n1] = chatHistoryLocations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['FavoriteInWorkspace'])) {
            $model->favoriteInWorkspace = $map['FavoriteInWorkspace'];
        }

        if (isset($map['File'])) {
            $model->file = $map['File'];
        }

        if (isset($map['Saved'])) {
            $model->saved = $map['Saved'];
        }

        if (isset($map['SessionConfig'])) {
            $model->sessionConfig = sessionConfig::fromMap($map['SessionConfig']);
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['SessionStatus'])) {
            $model->sessionStatus = $map['SessionStatus'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
