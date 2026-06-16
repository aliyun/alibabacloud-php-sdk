<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class DeleteMem0MemoriesRequest extends Model
{
    /**
     * @var string
     */
    public $agentSpace;

    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $contextStoreId;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'agentSpace' => 'agentSpace',
        'agentId' => 'agent_id',
        'appId' => 'app_id',
        'contextStoreId' => 'context_store_id',
        'metadata' => 'metadata',
        'orgId' => 'org_id',
        'projectId' => 'project_id',
        'runId' => 'run_id',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentSpace) {
            $res['agentSpace'] = $this->agentSpace;
        }

        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }

        if (null !== $this->appId) {
            $res['app_id'] = $this->appId;
        }

        if (null !== $this->contextStoreId) {
            $res['context_store_id'] = $this->contextStoreId;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->orgId) {
            $res['org_id'] = $this->orgId;
        }

        if (null !== $this->projectId) {
            $res['project_id'] = $this->projectId;
        }

        if (null !== $this->runId) {
            $res['run_id'] = $this->runId;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['agentSpace'])) {
            $model->agentSpace = $map['agentSpace'];
        }

        if (isset($map['agent_id'])) {
            $model->agentId = $map['agent_id'];
        }

        if (isset($map['app_id'])) {
            $model->appId = $map['app_id'];
        }

        if (isset($map['context_store_id'])) {
            $model->contextStoreId = $map['context_store_id'];
        }

        if (isset($map['metadata'])) {
            if (!empty($map['metadata'])) {
                $model->metadata = [];
                foreach ($map['metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['org_id'])) {
            $model->orgId = $map['org_id'];
        }

        if (isset($map['project_id'])) {
            $model->projectId = $map['project_id'];
        }

        if (isset($map['run_id'])) {
            $model->runId = $map['run_id'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
