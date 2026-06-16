<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\DescribeDataAgentSessionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dms\V20250414\Models\DescribeDataAgentSessionResponseBody\data\artifacts;
use AlibabaCloud\SDK\Dms\V20250414\Models\DescribeDataAgentSessionResponseBody\data\chatHistoryLocations;
use AlibabaCloud\SDK\Dms\V20250414\Models\DescribeDataAgentSessionResponseBody\data\dataSources;
use AlibabaCloud\SDK\Dms\V20250414\Models\DescribeDataAgentSessionResponseBody\data\recallResults;
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
     * @var artifacts[]
     */
    public $artifacts;

    /**
     * @var chatHistoryLocations[]
     */
    public $chatHistoryLocations;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var dataSources[]
     */
    public $dataSources;

    /**
     * @var string
     */
    public $favoriteInWorkspace;

    /**
     * @var string
     */
    public $file;

    /**
     * @var recallResults[]
     */
    public $recallResults;

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
        'artifacts' => 'Artifacts',
        'chatHistoryLocations' => 'ChatHistoryLocations',
        'createTime' => 'CreateTime',
        'dataSources' => 'DataSources',
        'favoriteInWorkspace' => 'FavoriteInWorkspace',
        'file' => 'File',
        'recallResults' => 'RecallResults',
        'saved' => 'Saved',
        'sessionConfig' => 'SessionConfig',
        'sessionId' => 'SessionId',
        'sessionStatus' => 'SessionStatus',
        'title' => 'Title',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->artifacts)) {
            Model::validateArray($this->artifacts);
        }
        if (\is_array($this->chatHistoryLocations)) {
            Model::validateArray($this->chatHistoryLocations);
        }
        if (\is_array($this->dataSources)) {
            Model::validateArray($this->dataSources);
        }
        if (\is_array($this->recallResults)) {
            Model::validateArray($this->recallResults);
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

        if (null !== $this->artifacts) {
            if (\is_array($this->artifacts)) {
                $res['Artifacts'] = [];
                $n1 = 0;
                foreach ($this->artifacts as $item1) {
                    $res['Artifacts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->dataSources) {
            if (\is_array($this->dataSources)) {
                $res['DataSources'] = [];
                $n1 = 0;
                foreach ($this->dataSources as $item1) {
                    $res['DataSources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->favoriteInWorkspace) {
            $res['FavoriteInWorkspace'] = $this->favoriteInWorkspace;
        }

        if (null !== $this->file) {
            $res['File'] = $this->file;
        }

        if (null !== $this->recallResults) {
            if (\is_array($this->recallResults)) {
                $res['RecallResults'] = [];
                $n1 = 0;
                foreach ($this->recallResults as $item1) {
                    $res['RecallResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['Artifacts'])) {
            if (!empty($map['Artifacts'])) {
                $model->artifacts = [];
                $n1 = 0;
                foreach ($map['Artifacts'] as $item1) {
                    $model->artifacts[$n1] = artifacts::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['DataSources'])) {
            if (!empty($map['DataSources'])) {
                $model->dataSources = [];
                $n1 = 0;
                foreach ($map['DataSources'] as $item1) {
                    $model->dataSources[$n1] = dataSources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FavoriteInWorkspace'])) {
            $model->favoriteInWorkspace = $map['FavoriteInWorkspace'];
        }

        if (isset($map['File'])) {
            $model->file = $map['File'];
        }

        if (isset($map['RecallResults'])) {
            if (!empty($map['RecallResults'])) {
                $model->recallResults = [];
                $n1 = 0;
                foreach ($map['RecallResults'] as $item1) {
                    $model->recallResults[$n1] = recallResults::fromMap($item1);
                    ++$n1;
                }
            }
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
